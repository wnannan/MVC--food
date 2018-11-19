<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/2
 * Time: 9:02
 */
class managegtype extends main{
    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }
    function init(){
        $db = new DB('shop');
        $shop = $db->query("id,shopname");
//        var_dump($shop);
        $this->smarty->assign('shop',$shop);
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('insertgtype.html');
    }
    function insert(){
        $db = new DB('goodstype');
        $rows= $db->insert($_POST);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'添加成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'添加失败']);
        }
    }
    function query(){
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('managegtype.html');
    }
    function query1(){
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $offset = ($page-1)*$limit;
        $field = isset($_GET['field']) ? $_GET['field'] : 'gid';
        $order = isset($_GET['order']) ? $_GET['order'] : 'asc';
        $db = new DB('goodstype,shop');
        $data = array_filter($_GET);

        unset($data['page']);
        unset($data['limit']);
        unset($data['field']);
        unset($data['order']);
        $str = "";
        foreach ($data as $key=>$v){
            $str .= " and ".$key."='".$v."'";
        }
//        $count = $db->where("goodstype.id=shop.id and $data")->order($field,$order)->query("count(*) as num")[0]['num'];
//        $result = $db->where("goodstype.id=shop.id")->order($field,$order)->limit($offset,$limit)->query("goodstype.*,shop.shopname");
//        var_dump($result);
//        exit();
        $res = "select goodstype.*,shop.shopname from goodstype,shop where goodstype.id=shop.id $str order by $field $order limit $offset,$limit";
        $result = $db->query($res);

        $con = $db->query("select goodstype.*,shop.shopname from goodstype,shop where goodstype.id=shop.id $str order by $field $order");
        $count = count($con);
        echo json_encode(['code'=>0,'msg'=>'成功','count'=>$count,'data'=>$result]);
    }
    function update(){
        $gid = $_POST['gid'];
        $field = $_POST['field'];
        $value = $_POST['value'];

        $db = new DB('goodstype');
        $rows = $db->update("update goodstype set $field='$value' where gid='$gid'");
//        var_dump($rows);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'修改成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'修改失败']);
        }
    }
    function delete(){
        $gid = $_GET['gid'];
        $db = new Db('goodstype');
        $rows = $db->delete("gid='$gid'");
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }
    }

}
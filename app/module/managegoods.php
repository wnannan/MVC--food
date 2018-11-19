<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/30
 * Time: 15:11
 */
class managegoods extends main {
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }
    /*
     * 展示添加店铺页面
     * */
    function init(){
        $data = $_GET;
        $db = new DB('shop');
        $shop = $db->query('id,shopname');
        $id = isset($data['id'])?$data['id']:$shop[0]['id'];
        $dbt = new DB('goodstype');
        $type = $dbt->where("id=$id")->query('gid,title');
        $this->smarty->assign('shop',$shop);
        $this->smarty->assign('type',$type);
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('insertgoods.html');
    }
    function init2(){
        $data = $_GET;
        $id = $data['id'];
        $dbt = new DB('goodstype');
        $type = $dbt->where("id=$id")->query('*');
        echo json_encode($type);
    }
    //    添加店铺
    function insert(){
        $data = $_POST;
        $db = new DB('goods');
//        var_dump($data);
        $rows = $db->insert($data);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'栏目添加成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'栏目添加失败']);
        }
    }
//  页面
    function query1(){
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('managegoods.html');
    }
//    查看店铺
    function query(){
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $offset = ($page-1)*$limit;
        $field = isset($_GET['field']) ? $_GET['field'] : 'id';
        $order = isset($_GET['order']) ? $_GET['order'] : 'asc';
        $db = new DB('goods,goodstype,shop');
        $data = $_GET;
        $data = array_filter($data);
        unset($data['page']);
        unset($data['limit']);
        unset($data['field']);
        unset($data['order']);
        $str = "";
        foreach ($data as $key=>$v){
            $str .= " and ".$key."='".$v."'";
        }
        $result = $db->query("select goods.*,goodstype.title as cname,shop.shopname from goods,goodstype,shop where goods.gid=goodstype.gid and goods.sid=shop.id $str order by $field $order limit $offset,$limit");
        $con = $db->query("select goods.*,goodstype.title as cname,shop.shopname from goods,goodstype,shop where goods.gid=goodstype.gid and goods.sid=shop.id $str order by $field $order");
        $count = count($con);
//        var_dump($con);
//        exit();
        echo json_encode(['code'=>0, 'msg'=>"数据获取成功", 'count'=>$count, 'data'=>$result]);
    }
//    删除多条数据
    function del(){
        $id = $_GET['id'];
        $db = new DB('goods');
        $sql = "delete from goods where id in ($id)";
//        var_dump($sql);
        $res = $db->mysql->query($sql);
        $rows = $db->mysql->affected_rows;
        if($rows!=0){
            echo 'yes';
        }else{
            echo 'no';
        }
    }
//    删除单条数据
    function deletes(){
        $id = $_GET['id'];
        $db = new DB('goods');
        $sql = $db->delete("id=$id");
        if($sql == 1){
            echo 'yes';
        }else {
            echo 'no';
        }
    }
//    编辑数据
    function edit(){
        $id = $_GET['id'];
        $sid = $_GET['sid'];
        $dbs = new DB('shop');
        $shop = $dbs->query("*");
//var_dump($shop);
//exit();
        $db = new DB('goodstype');
        $type = $db->where("id=$sid")->query("gid,title");
//var_dump($type);
//exit();
        $dbg = new DB('goods');
        $goods = $dbg->where("id=$id")->query("*")[0];
//        var_dump($goods);
//        exit();
        $this->smarty->assign('shop',$shop);
        $this->smarty->assign('type',$type);
        $this->smarty->assign('goods',$goods);
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('editgoods.html');
    }
    function update(){
        $data = $_GET;
        unset($data['file']);
        $id = $data['id'];
        $db = new DB('goods');
        $rows = $db->where("id=$id")->update(array_slice($data,0,-1));

        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'栏目修改成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'栏目修改失败']);
        }
    }
}
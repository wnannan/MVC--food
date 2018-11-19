<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/30
 * Time: 15:11
 */
class manageshop extends main {
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
        $db = new DB('category');
        $cate = $db->where("pid!=0")->query("*");

        $this->smarty->assign('info',$this->info);
        $this->smarty->assign('cate',$cate);
        $this->smarty->display('insertshop.html');
    }
    //    添加店铺
    function insert(){
        $data = $_POST;
        $db = new DB('shop');
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
        $this->smarty->display('manageshop.html');
    }
//    查看店铺
    function query(){
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $offset = ($page-1)*$limit;
        $field = isset($_GET['field']) ? $_GET['field'] : 'id';
        $order = isset($_GET['order']) ? $_GET['order'] : 'asc';
        $db = new DB('shop,category');
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
//        $sql = "select * from shop order by c id desc limit $offset,$limit";
//        $result = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

//        $count = count($db->query("*"));
//        $count = $db->query("select count(*) as num from shop order by cid desc")[0]['num'];

//        $count= $db->mysql->query("select * from shop")->fetch_all(MYSQLI_ASSOC);  //完整sql语句
//        $count = $db->query("select shop.*,category.title from shop,category where shop.cid=category.cid order $field $order");
//        $count = count($count);
//        $result = $db->where("shop.cid=category.cid")->order($field,$order)->limit($offset,$limit)->query("shop.*,category.title");
        $result = $db->query("select shop.*,category.title from shop,category where shop.cid=category.cid $str order by $field $order limit $offset,$limit");
        $con = $db->query("select shop.*,category.title from shop,category where shop.cid=category.cid $str order by $field $order");
        $count = count($con);
        echo json_encode(['code'=>0, 'msg'=>"数据获取成功", 'count'=>$count, 'data'=>$result]);
    }
//    删除多条数据
    function del(){
        $id = $_GET['id'];
        $db = new DB('shop');
        $sql = "delete from shop where id in ($id)";
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
        $db = new DB('shop');
        $sql = $db->delete("id=$id");
        if($db->mysql->affected_rows == 1){
            echo 'yes';
        }else {
            echo 'no';
        }
    }
//    编辑数据
    function edit(){
        $id = $_GET['id'];
        $db = new DB('shop');
        $dbc = new DB('category');
        $cate = $dbc->where('pid!=0')->query("*");
        $shop = $db->where("id=$id")->query("*")[0];
//        var_dump($shop);
//        exit();
        $views = explode(',',$shop['views']);

        $this->smarty->assign('views',$views);
        $this->smarty->assign('shop',$shop);
        $this->smarty->assign('cate',$cate);
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('editshop.html');
    }
    function update(){
        $data = $_GET;
        $id = $data['id'];
        $db = new DB('shop');
        $rows = $db->where("id=$id")->update(array_slice($data,0,-1));
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'栏目修改成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'栏目修改失败']);
        }
    }
}
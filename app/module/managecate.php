<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/24
 * Time: 11:39
 */
// 增删改查
class managecate extends main{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }
    function init(){

//        $db = new DB();
//        $info = $db->mysql->query("select * from manage where id=$id")->fetch_assoc();
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('managecate.html');
    }

    function insert(){
        $db = new DB('category');
        $obj = new Menu();
        $str = $obj->getCate($db->mysql,'category',0,0);

        $this->smarty->assign('info',$this->info);
        $this->smarty->assign('str',$str);
        $this->smarty->display('insertcate.html');
    }
    function insert1(){
        $db = new DB('category');
        $data = $_GET;
//        $rows = $db->insert($data);
        $sql = "insert into category (pid,title,thumb) values ('{$data['pid']}','{$data['title']}','{$data['thumb']}')";
        $rows = $db->insert($sql);

        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'栏目添加成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'栏目添加失败']);
        }
    }
//    查看栏目
    function query(){
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $offset = ( $page-1 ) * $limit;
         $db = new DB('category');

        $data = $_GET;
//        去除空的元素
        $data = array_filter($data);
//        去除page,limit对应的元素
         unset($data['page']);
         unset($data['limit']);
         if(!count($data)){
             $wheresql = '';
         }else {
             $wheresql = "where";
             foreach ($data as $key => $v) {
                 $wheresql .= " $key='$v' and";
             }
             $wheresql = substr($wheresql, 0, -3);

         }

        $count= $db->mysql->query("select * from category $wheresql")->fetch_all(MYSQLI_ASSOC);
        $sql = "select * from category $wheresql order by cid desc limit $offset,$limit";

        $result = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $data = [];
        $data['code']=0;
        $data['msg'] = '数据获取成功';
        $data['count'] = count($count);
        $data['data'] = $result;
        echo json_encode($data);
    }
//    删除商品
    function delete(){
        $cid = $_GET['cid'];
        $db = new DB('category');
//        $sql = "delete from category where cid='$cid'";
//        $rows = $db->delete($sql);
        $rows = $db->delete("cid=$cid");
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }
    }
//    编辑商品
    function edit(){
        $cid = $_GET['cid'];
        $db = new DB('category');
        $obj = new Menu();
        $str = $obj->getCate($db->mysql,'category',0,0,$cid);
//        $data = $db->where(['cid'=>$cid])->query("*");
        $cate = $db->where("cid=$cid")->query("*")[0];
//      挂载变量
        $this->smarty->assign('cate',$cate);
//        栏目
        $this->smarty->assign('str',$str);
//        头信息
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('editcate.html');
    }
    function update(){
        $data = $_GET;
        $pid = $data['pid'];
        $title = $data['title'];
        $thumb = $data['thumb'];
        $cid = $data['cid'];

        $db = new DB('category');
        $sql = "update category set pid=$pid,title='$title',thumb='$thumb' where cid=$cid";
        $rows = $db->update($sql);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'栏目修改成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'栏目修改失败']);
        }
    }
}
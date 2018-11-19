<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/5
 * Time: 10:52
 */
class index extends main{
    function __construct()
    {
        parent::__construct();
    }
    function init(){
        $db = new DB("category");
        $cate = $db->where("pid=0")->query("*");
        $num = ceil(count($cate)/8);
        $this->smarty->assign('num',$num);
        $this->smarty->assign('cate',$cate);
        $this->smarty->display('index.html');
    }
    function shop(){
        $order = $_GET['order'];
        $db = new DB('shop');
        $result = $db->order($order,'desc')->query("*");
        echo json_encode($result);
    }
}
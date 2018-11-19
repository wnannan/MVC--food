<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/5
 * Time: 15:48
 */
class food extends main{
    function __construct()
    {
        parent::__construct();
    }
    function init(){
        $cid = $_GET['cid'];
        $db = new DB('category');
        $cate = $db->where("cid=$cid")->query("*")[0];
        $type = $db->order('cid','asc')->where("pid=$cid")->query("*");
        $this->smarty->assign('cate',$cate);
        $this->smarty->assign('type',$type);
        $this->smarty->display('meishi.html');
    }
    function lists(){
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $offset = ($page-1)*$limit;
        $order = $_GET['order'];
        $cid = $_GET['cid'];
        $pid = $_GET['pid'];

        if($cid){
            $db = new DB('shop');
            $data = $db->where("cid=$cid")->order($order,'desc')->query("*");
            $pages = ceil(count($data)/$limit);
            $result = $db->where("cid=$cid")->order($order,'desc')->limit($offset,$limit)->query("*");

        }else{
            $db = new DB('category');
            $ids = $db->where("pid=$pid")->query("cid");
            $str = "(";
            foreach ($ids as $v){
                $str .= "{$v['cid']},";
            }
            $str = substr($str,0,-1).')';
            $data = $db->query("select * from shop where cid in $str order by $order desc");
            $pages = ceil(count($data)/$limit);
            $result = $db->query("select * from shop where cid in $str order by $order desc limit $offset,$limit");
        }
        echo json_encode([
            'pages'=>$pages,
            'result'=>$result
        ]);
    }
}
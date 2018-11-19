<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/15
 * Time: 8:50
 */
class order extends main
{
    function __construct()
    {
        parent::__construct();
    }

    function init()
    {
        $this->smarty->display('dingdan.html');
    }

    function order()
    {
        if (!$this->checklogin()) {
            $this->smarty->display('loginuser.html');
            exit();
        }
        $uid = $_SESSION['userid'];
        $db = new DB('orders');
        $order = $db->order('oid','desc')->where("uid = $uid")->query("*");
        for ($i = 0; $i < count($order); $i++) {
            $oid = $order[$i]['oid'];
            $db = new DB('orderextra,shop');
            $orderex = $db->where("orderextra.oid=$oid and orderextra.sid=shop.id")->query("shop.shopname,shop.thumb")[0];
            $order[$i]['sname'] = $orderex['shopname'];
            $order[$i]['thumb'] = $orderex['thumb'];
        }
        echo json_encode($order);
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/15
 * Time: 13:37
 */
class mine extends main
{
    function __construct()
    {
        parent::__construct();
    }

    function init()
    {
        if (!$this->checklogin()) {
            $this->smarty->display('loginuser.html');
            exit();
        }
        $uid = $_SESSION['userid'];
        $db = new DB('users');
        $tel = $db->where("id=$uid")->query("*")[0];
        $phone = $tel['phone'];
        $username = $tel['username'];
        $thumb = $tel['thumb'];
        $this->smarty->assign('username',$username);
        $this->smarty->assign('thumb',$thumb);
        $this->smarty->assign('phone',$phone);
        $this->smarty->display('mine.html');
    }

}
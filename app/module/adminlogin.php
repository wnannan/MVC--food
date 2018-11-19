<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/24
 * Time: 11:38
 */
// 登录 验证

//继承main中的smarty
class adminlogin extends main {
    function __construct()
    {
//        运行父对象main
        parent::__construct();
    }

    function login(){
//        打开adminlogin.html页面
        $this->smarty->display('adminlogin.html');
    }
    function check(){
        $mysql = new mysqli('localhost','root','','10.24food','3306');
        $mysql->query('set names utf8');

        $username = $_GET['username'];
        $password = md5($_GET['password']);
        $sql = "select * from manage where username='$username' and password='$password'";
        $result = $mysql->query($sql)->fetch_assoc();

        if($result){
            session_start();
            $_SESSION['info']=$result;
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    function register(){
        $this->smarty->display('register.html');
    }
}
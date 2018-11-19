<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/7
 * Time: 13:47
 */
class my extends main {
    function __construct()
    {
        parent::__construct();
    }
//    登录
    function init(){
        $this->smarty->display('loginuser.html');
    }
//    注册
    function register(){
        $this->smarty->display('registeruser.html');
    }
//
    function registercheck(){
        $data = $_POST;
        unset($data['password1']);
        $password = md5($data['password']);
        $db = new DB('users');
        $rows = $db->insert($data);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'成功']);
        }else {
            echo json_encode(['code'=>1,'msg'=>'失败']);
        }
    }
    function checkusername(){
        $data = $_POST['phone'];
        $db = new DB('users');
        $result = $db->query("select count(*) as num from users where phone=$data");
        if($result[0]['num']>=0){
            echo 'false';
        }else{
            echo 'true';
        }
    }
    function code(){
        $code = new code(87,30);
        $code->output();
        session_start();
        $_SESSION['usercode'] = $code->result;
//        var_dump($_SESSION['usercode']);
    }
    function logincheck(){
        session_start();
        $_SESSION['usercode'];
        $code = $_POST['code'];
        if($_SESSION['usercode'] == $code){
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $db = new DB('users');
            $result =$db->where("phone='$phone'")->query("*");
            if($result){
                $_SESSION['islogin'] = 'yes';
                $_SESSION['userid'] = $result[0]['id'];
                if($result[0]['password'] == $password){
                    echo json_encode(['code'=>0,'msg'=>'登录成功']);
                }else{
                    echo json_encode(['code'=>1,'msg'=>'密码错误']);
                }
            }else{
                echo json_encode(['code'=>1,'msg'=>'手机号不存在']);
            }
        }else{
            echo json_encode(['code'=>1,'msg'=>'验证码错误']);
        }

    }
}
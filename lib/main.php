<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/24
 * Time: 16:15
 */
class main{
    public $smarty;
    function __construct()
    {
//        实例化Smarty类
        $this->smarty = new Smarty();
//        模板目录
        $this->smarty->setTemplateDir('app/view');
//        编译文件目录
        $this->smarty->setCompileDir('compile');
    }
    function checklogin(){
        session_start();
        if(isset($_SESSION['islogin']) && $_SESSION['islogin']){
            return true;
        }
        return false;
    }
}
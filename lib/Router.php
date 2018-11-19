<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/24
 * Time: 11:52
 */
class Router{
//    构造函数Router方法
//    访问方式    Router::init()
    static function init(){
        if(!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO']=='/'){
//            $module,$method初始化
            $module = 'index';
            $method = 'init';
        }else{
            $str = substr($_SERVER['PATH_INFO'],1);
            $arr = explode('/',$str);
            $module = $arr[0];
            $method = isset($arr[1]) && $arr[1] ? $arr[1] : 'init';
        }

//        echo $_SERVER['PATH_INFO'];
//        exit();

        if(file_exists('app/module/'.$module.'.php')){
            include_once 'app/module/'.$module.'.php';
            if(class_exists($module)){
                $obj = new $module();
                if(method_exists($obj,$method)){
                    $obj->$method();
                }else{
                    echo $method.'方法不存在';
                }
            }else{
                echo $module.'模块不存在';
            }
        }else {
            echo $module.'.php文件不存在';
        }
    }

}
<?php
// localhost/10.24food/index.php/adminlogin/login  登录url
// localhost/10.24food/index.php/adminlogin/register 注册url

//定义变量，默认false区分大小写
define('CSS_PATH','/10.24food/static/css/',false);
define('JS_PATH','/10.24food/static/js/');
define('LAYUIJS_PATH','/10.24food/static/');
define('IMG_PATH','/10.24food/static/images/');
define('FONT_PATH',__DIR__.'/lib/calibri.ttf');  //后台访问路径

require_once 'lib/Router.php';
require_once 'lib/libs/Smarty.class.php';
require_once 'lib/main.php';
require_once 'lib/db.php';
require_once 'lib/function.php';
require_once 'lib/code.php';
Router::init();
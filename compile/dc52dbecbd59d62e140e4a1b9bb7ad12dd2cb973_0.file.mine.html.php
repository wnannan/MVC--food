<?php
/* Smarty version 3.1.33, created on 2018-11-15 06:38:47
  from 'E:\wamp64\www\10.24food\app\view\mine.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed1477721711_79552702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc52dbecbd59d62e140e4a1b9bb7ad12dd2cb973' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\mine.html',
      1 => 1542263925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed1477721711_79552702 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>美食</title>
    <link rel="stylesheet" type="text/css" href="font/iconfont.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
mine.css"/>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_803159_ka7aq9r2148.css"/>
    <link rel="stylesheet" href="<?php echo LAYUIJS_PATH;?>
font1/iconfont.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

        document.addEventListener('plusready', function(){
            //console.log("所有plus api都应该在此事件发生后调用，否则会出现plus is undefined。"

        });

    <?php echo '</script'; ?>
>
</head>
<body>
<!--头部开始-->
<div class="header">
    <i class="iconfont icon-tishi"></i>
    <h1>我的</h1>
    <i class="iconfont icon-config"></i>
</div>
<!--头部结束-->
<!--个人信息开始-->
<div class="info">
    <div class="infoFirst">
        <div class="infoFirst-left">
            <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" alt="" />
        </div>
        <div class="infoFirst-right">
            <div class="name">
                <p class="ni"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
                <p class="vip">VIP</p>
            </div>
            <div class="phone">
                <i class="iconfont icon-zixun"></i>
                <p><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</p>
            </div>
        </div>
    </div>
    <div class="infoSecond">
        <div class="pay">
            <div class="purse">
                <i class="iconfont icon-qianbao"></i>
                <p>钱包</p>
            </div>
            <p class="zi">350.9</p>
            <p class="yuan">元</p>
        </div>
        <div class="pay">
            <div class="p">
                <i class="iconfont icon-iconfontyouhui-copy"></i>
                <p>优惠</p>
            </div>
            <p class="zi">5000</p>
            <p class="yuan">个</p>
        </div>
        <div class="pay">
            <div class="e">
                <i class="iconfont icon-jinbi"></i>
                <p>金币</p>
            </div>
            <p class="zi">3000</p>
            <p class="yuan">个</p>
        </div>
    </div>
</div>
<!--个人信息结束-->
<div class="address">
    <div class="addressF">
        <i class="iconfont icon-dizhi1"></i>
        <p>收货地址</p>
    </div>
    <p class="shui"></p>
    <div class="addressI">
        <i class="iconfont icon-shoucang-not11"></i>
        <p>我的收藏</p>
    </div>
    <p class="shui"></p>
    <div class="addressS">
        <i class="iconfont icon-kefuzhongxin"></i>
        <p>客服中心</p>
    </div>
</div>
<div class="address">
    <div class="addressF">
        <i class="iconfont icon-dizhi1"></i>
        <p>收货地址</p>
    </div>
    <p class="shui"></p>
    <div class="addressI">
        <i class="iconfont icon-shoucang-not11"></i>
        <p>我的收藏</p>
    </div>
    <p class="shui"></p>
    <div class="addressS">
        <i class="iconfont icon-kefuzhongxin"></i>
        <p>客服中心</p>
    </div>
</div>
<ul class="tab">
    <li><a href="/10.24food/index.php/"><i class="iconfont icon-shouye"></i><span>首页</span></a></li>
    <li><a href="#"><i class="iconfont icon-weibiaoti2fuzhi15"></i><span>发现</span></a></li>
    <li><a href="/10.24food/index.php/order"><i class="iconfont icon-dingdan"></i><span>订单</span></a></li>
    <li><a href="/10.24food/index.php/mine"><i class="iconfont icon-wode"></i><span>我的</span></a></li>
</ul>
</body>
</html>
<?php }
}

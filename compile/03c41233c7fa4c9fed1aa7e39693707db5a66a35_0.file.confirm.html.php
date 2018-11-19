<?php
/* Smarty version 3.1.33, created on 2018-11-14 10:58:38
  from 'E:\wamp64\www\10.24food\app\view\confirm.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bebffdea957d7_18142357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c41233c7fa4c9fed1aa7e39693707db5a66a35' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\confirm.html',
      1 => 1542193118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebffdea957d7_18142357 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
confirm.css"/>
    <link rel="stylesheet" href="<?php echo LAYUIJS_PATH;?>
font1/iconfont.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
confirm.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="header">
    <div class="dizhi">
        <a href="javascript: history.back();"><i class="iconfont icon-buoumaotubiao09"></i></a>
        <p class="ad">订单配送至</p>
        <p class="address">太原市小店区凯通大厦</p>
        <!--<p><img src="img/xiaopaixuxia.png" alt="" /></p>-->
        <p class="tel">辛德拉（女士）15735644808</p>
    </div>
    <div class="songda">
        <div class="shang">
            <p>送达时间</p>
            <p>最快在11:30送达</p>
        </div>
        <div class="xia">
            <p>支付方式</p>
            <!--<p>微信首单立减8元</p>-->
            <p>支付方式 <i class="iconfont icon-xiangyou-copy"></i></p>
        </div>
    </div>
</div>
<div class="zhu">
    <div class="titlegoods">
        <p class="title"></p>
        <ul class="goods">
        </ul>
    </div>
</div>


<div class="footer">
    <div class="img">
        <div><img src="<?php echo IMG_PATH;?>
gouwu.png"/></div>
        <span class="count"></span>
    </div>
    <div class="text">
        <p class="price"></p>
        <del></del>
        <p class="fee">配送费 <span></span>元</p>
    </div>
    <a>去支付</a>
</div>
</body>
</html>
<?php }
}

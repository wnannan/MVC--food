<?php
/* Smarty version 3.1.33, created on 2018-11-14 11:23:30
  from 'E:\wamp64\www\10.24food\app\view\paysuccess.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec05b27d7e63_68861895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea799a2dee90de5b138608f873c9399a88a400a' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\paysuccess.html',
      1 => 1542194609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec05b27d7e63_68861895 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>支付成功</title>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
chenggong.css" />
		<link rel="stylesheet" href="<?php echo LAYUIJS_PATH;?>
font1/iconfont.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
success.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="top">
			<a href="javascript: history.back();"><i class="iconfont icon-buoumaotubiao09"></i>支付成功</a>
		</div>
		<div class="main">
			<h5>您本次消费共<span>339</span>元</h5>
			<i class="iconfont icon-duihaocheckmark17"></i>
		</div>
		<div class="footer">
			<a href="/10.24food/index.php/index">继续购物</a>
			<a href="">查看订单</a>
		</div>
	</body>
</html>
<?php }
}

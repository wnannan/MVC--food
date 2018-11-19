<?php
/* Smarty version 3.1.33, created on 2018-11-09 03:31:53
  from 'E:\wamp64\www\10.24food\app\view\registeruser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be4ffa935c1b9_94187244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7418a303e7baa6a2111d3217b123b580e72e752' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\registeruser.html',
      1 => 1541734292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4ffa935c1b9_94187244 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>注册</title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
zhuce.css" />
		<link rel="stylesheet" href="<?php echo LAYUIJS_PATH;?>
font1/iconfont.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
registeruser.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="top">
			<a href="index.html"><i class="iconfont icon-buoumaotubiao09"></i></a>
			<span>注册</span>
		</div>
		<div class="img">
			<img src="./img/logo.png" alt="" />			
		</div>
		<form id="myform">
			<div class="main">
				<div class="bgc"></div>
				<ul class="bg">
					<li><input id="phone" name="phone" form="myform" type="text" placeholder="请输入您的手机号"/></li>
					<li><input id="password" name="password" form="myform" type="password" placeholder="请输入您的密码"/></li>
					<li><input id="password1" name="password1" form="myform" type="password" placeholder="请再次输入密码"/></li>
					<!--<li class="yzm"><input type="text" placeholder="请输入验证码"/><a href="#">获取验证码</a></li>-->
					<li><input form="myform" type="submit" value="注册"/></li>
					<li class="a">
						<a href="#">忘记密码?</a>
						<a href="/10.24food/index.php/my/init">已有帐号，请登录</a>
					</li>
				</ul>
			</div>
		</form>
		</div>
	</body>
</html>
<?php }
}

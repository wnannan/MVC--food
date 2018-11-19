<?php
/* Smarty version 3.1.33, created on 2018-11-09 12:58:42
  from 'E:\wamp64\www\10.24food\app\view\loginuser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be584821a1bf4_70807672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dad70f54711c2239e9ae2bb8727fb74d7bd8e80' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\loginuser.html',
      1 => 1541768320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be584821a1bf4_70807672 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>登录</title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
denglu.css" />
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
loginuser.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="top">
			<a href="zhuce.html"><i class="iconfont icon-buoumaotubiao09"></i></a>
			<span>登录</span>
		</div>
		<div class="img">
			<img src="./img/logo.png" alt="" />			
		</div>
		<form id="myform">
		<div class="main">
			<div class="bgc"></div>
			<ul class="bg">
				<li><input form="myform" id="phone" name="phone" type="text" placeholder="请输入您的手机号"/></li>
				<li><input form="myform" id="password" name="password" type="password" placeholder="请输入您的密码"/></li>
				<li class="yzm">
					<input id="code" name="code" type="text" placeholder="请输入验证码" class="yz"/>
					<img src="/10.24food/index.php/my/code" onclick = "this.src = '/10.24food/index.php/my/code?id='+Date.now()" alt="">
					<!--<a href="#">获取验证码</a>-->
				</li>
				<li><input form="myform" type="submit" value="登录"/></li>
				<li class="a">
					<a href="#">忘记密码?</a>
					<a href="/10.24food/index.php/my/register">没有帐号，去注册</a>
				</li>
			</ul>
			</div>
		</div>
		</form>
		
			<p>请使用第三方登录</p>
		<div class="footer">	
			<i class="iconfont icon-qq"></i>
			<i class="iconfont icon-weixin"></i>
			<i class="iconfont icon-weibo"></i>
		</div>
	</body>
</html>
<?php }
}

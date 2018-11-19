<?php
/* Smarty version 3.1.33, created on 2018-11-15 10:24:44
  from 'E:\wamp64\www\10.24food\app\view\dingdan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed496c26f8b6_61403851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94fa4814fb8dad2136e675667e03afbc181a2e7' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\dingdan.html',
      1 => 1542277482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed496c26f8b6_61403851 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title></title>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
dingdan.css"/>
    	<link rel="stylesheet" href="<?php echo LAYUIJS_PATH;?>
font1/iconfont.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll-probe.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
order.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="top">
			<p>订单</p>	
		</div>
		<div class="scroll">
			<ul class="order">
			</ul>
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

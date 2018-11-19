<?php
/* Smarty version 3.1.33, created on 2018-11-10 07:22:58
  from 'E:\wamp64\www\10.24food\app\view\meishi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be68752322db3_60024705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10019281b0c7f0264d12a9674f78990f6b3335d5' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\meishi.html',
      1 => 1541834576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be68752322db3_60024705 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>美食</title>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
meishi.css" />
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
food.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="top">
			<a href="javascript:history.back();"><i class="iconfont icon-buoumaotubiao09"></i><?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
</a>
		</div>
		<div class="nav">
			<ul class="dh">
				<li cid="0">全部</li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<li cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<ul class="s-a">
			<li type="id">综合排序</li>
			<li type="score">好评优先</li>
			<li type="sale">销量</li>
			<li type="fee">筛选</li>
		</ul>
		<div class="s-b">
			<div id="wrapper">
				<div class="scorllup">
					加载更多...
				</div>
				<ul class="s-s">

				</ul>
				<div class="scorllend">
					还有许多...
				</div>
			</div>
				

		</div>

		<div class="bgimg">
			<div class="img"></div>
		</div>
		
		<!--<ul class="tab">
			<li><a href="#"><i class="iconfont icon-shouye"></i><span>首页</span></a></li>
			<li><a href="#"><i class="iconfont icon-weibiaoti2fuzhi15"></i><span>发现</span></a></li>
			<li><a href="#"><i class="iconfont icon-dingdan"></i><span>订单</span></a></li>
			<li><a href="#"><i class="iconfont icon-wode"></i><span>我的</span></a></li>
		</ul>-->
	</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-11-16 06:55:04
  from 'E:\wamp64\www\10.24food\app\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bee69c88151a6_14304475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5d3c57071b6b5f01e32be9cc10bb534569a9ee' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\index.html',
      1 => 1542350458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee69c88151a6_14304475 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>首页</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
index.css"/>
    <link rel="stylesheet" href="<?php echo LAYUIJS_PATH;?>
font1/iconfont.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
modules/swiper-4.4.1.min.css">
	<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
lay/modules/swiper-4.4.1.min.js"><?php echo '</script'; ?>
>
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
index.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="top">
		<div class="t-b">
			<i class="iconfont icon-location"></i>
			<p>太原市小店区</p>
			<a href="#"><i class="iconfont icon-sousuo"></i></a>
		</div>		
	</div>
	
		<div class="swiper-container banner" style="margin-top: 1.6rem;">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="#"><img src="<?php echo IMG_PATH;?>
ban.png"/></a>
				</div>
				<div class="swiper-slide">
					<a href="#"><img src="<?php echo IMG_PATH;?>
ban.png"/></a>
				</div>
			</div>
			<div class="swiper-pagination" style="bottom: -8px;"></div>
		</div>

	<div class="swiper-container cate">
		<div class="swiper-wrapper">
			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['num']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
				<?php $_smarty_tpl->_assignInScope('foo', $_smarty_tpl->tpl_vars['i']->value*8+7);?>
				<?php if ($_smarty_tpl->tpl_vars['foo']->value > count($_smarty_tpl->tpl_vars['cate']->value)-1) {?>
					<?php $_smarty_tpl->_assignInScope('foo', count($_smarty_tpl->tpl_vars['cate']->value)-1);?>
				<?php }?>
			<div class="swiper-slide">
				<ul class="m-i">
					<?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['foo']->value+1 - ($_smarty_tpl->tpl_vars['i']->value*8) : $_smarty_tpl->tpl_vars['i']->value*8-($_smarty_tpl->tpl_vars['foo']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value*8, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
					<li>
						<a href="/10.24food/index.php/food?cid=<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['cid'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['thumb'];?>
"/>
							<p><?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
</p>
						</a>
					</li>
					<?php }
}
?>
				</ul>
			</div>
			<?php }
}
?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
		
		<div class="banner1">
			<a href="#"><img src="<?php echo IMG_PATH;?>
ban1.png"/></a>
		</div>
		<div class="sjtj">
			<img src="<?php echo IMG_PATH;?>
a1.png"/>
			<span>商家推荐</span>
			<img src="<?php echo IMG_PATH;?>
a2.png"/>
		</div>
		<ul class="s-a">
			<li name="id">综合排序</li>
			<li name="score">好评优先</li>
			<li name="sale">销量</li>
			<li name="fee">配送费</li>
		</ul>
		<div class="s-b">
			<div class="s-s">

				<div class="s-b-a">
					<div class="img">
						<img src="<?php echo IMG_PATH;?>
cake.png" alt="" />
					</div>
					<div class="s-text">
						<h6><a href="./dianpu.html">爱度西点</a></h6>
						<div>
							<i class="iconfont icon-star_full"></i>
							<i class="iconfont icon-star_full"></i>
							<i class="iconfont icon-star_full"></i>
							<i class="iconfont icon-star_full"></i>
							<i class="iconfont icon-star_full"></i>
						</div>
						<p>28人推荐<span class="a">芭比娃娃蛋糕</span></p>
						<p>甜点饮品 <span class="b">学府街505m</span></p>
						<p>满88减5；满128减10；满188减15</p>
					</div>
				</div>

			</div>
		</div>
	<div style="height: 1rem"></div>

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

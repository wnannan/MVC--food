<?php
/* Smarty version 3.1.33, created on 2018-11-13 11:44:25
  from 'E:\wamp64\www\10.24food\app\view\shop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beab91905c131_90073207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beafdf5f04117b332cc50918aa20412eb4831cb8' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\shop.html',
      1 => 1542109463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beab91905c131_90073207 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    	<title>商家店铺</title>
    	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
dianpu.css"/>
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
shop.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="top">
			<div class="t-t">
				<div class="icon">
					<a href="javascript: history.back();"><i class="iconfont icon-buoumaotubiao09"></i></a>
					<i class="iconfont icon-gengduo"></i>
				</div>
			</div>	
			<div class="t-b">
				<img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['thumb'];?>
"/>
				<h6><?php echo $_smarty_tpl->tpl_vars['shop']->value['shopname'];?>
</h6>
				<p><span>评价<?php echo $_smarty_tpl->tpl_vars['shop']->value['score'];?>
</span>
				<span>月销<?php echo $_smarty_tpl->tpl_vars['shop']->value['sale'];?>
</span>
				<span>蜂鸟专送30分钟</span>
				</p>
				<!--<a href="#"><img src="<?php echo IMG_PATH;?>
lq.png" alt="" /></a>-->
				<span><?php echo $_smarty_tpl->tpl_vars['shop']->value['notice'];?>
</span>
			</div>
		</div>
		<div class="main">
			<ul class="ch">
				<li class="type">种类</li>
				<li>评价</li>
				<li>商家</li>
			</ul>
			<div class="m-m">
				<div class="goodstype">
					<div class="wrapper">
						<div class="scroll">
							<ul class="m-l">
							</ul>
						</div>
					</div>
					<div class="wrapper-goods">
						<div class="good">
							<ul class="m-r">
							</ul>
						</div>
					</div>
				</div>
				<div class="store-wrapper">
					<div class="store-wrap">
						<ul class="store">
							<li class="info-fee">
								<h3>配送信息</h3>
								<div>
									<p>由商家配送提供配送，约32分钟送达，距离883m</p>
									<p>配送费￥1</p>
								</div>
							</li>
							<li class="service">
								<h3>活动与服务</h3>
								<p>
									<span class="active">满减</span>
									<span class="con">满18减2，满28减4，满38减6</span>
								</p>
								<p>
									<span class="active">特价</span>
									<span class="con">单品定价</span>
								</p>
								<p>
									<span class="active">特价</span>
									<span class="con">单品定价</span>
								</p>
							</li>
							<li class="views">
								<h3>商家实景</h3>
								<img src="<?php echo IMG_PATH;?>
dp1.png" alt="">
								<img src="<?php echo IMG_PATH;?>
dp1.png" alt="">
							</li>
							<li>
								<h3>商家信息</h3>
								<ul class="detail">
									<li>本土品牌</li>
									<li>
										<span class="type">品类</span>
										<span>日韩料理, 炸鸡炸串</span>
									</li>
									<li>
										<span class="type">商家电话</span>
										<span>18435999829</span>
									</li>
									<li>
										<span class="type">地址</span>
										<span>吕梁离石区上安村盛世鼎典</span>
									</li>
									<li>
										<span class="type">营业时间</span>
										<span>10:00-24:00</span>
									</li>
								</ul>

							</li>
							<li>
								<h3>营业资质 <span class="more">&gt;</span></h3>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cover">
			<div class="info">
				<p class="info-fee">本店新用户下单立减10元</p>
				<p class="info-del">已选商品<small>清空</small></p>
				<div class="yigou">
					<ul>
						<li class="content">
							<p>梨汁</p>
							<span><small>￥</small>43</span>
							<div class="cou">
								<div class="jian"><img src="<?php echo IMG_PATH;?>
jian.png" alt="" /></div>
								<span>2</span>
								<div class="add"><img src="<?php echo IMG_PATH;?>
add.png" alt="" /></div>
							</div>

						</li>
						<li class="content">
							<p>梨汁</p>
							<span><small>￥</small>43</span>
							<div class="cou">
								<div class="jian"><img src="<?php echo IMG_PATH;?>
jian.png" alt="" /></div>
								<span>2</span>
								<div class="add"><img src="<?php echo IMG_PATH;?>
add.png" alt="" /></div>
							</div>
						</li>
						<li class="content">
							<p>梨汁</p>
							<span><small>￥</small>43</span>
							<div class="cou">
								<div class="jian"><img src="<?php echo IMG_PATH;?>
jian.png" alt="" /></div>
								<span>2</span>
								<div class="add"><img src="<?php echo IMG_PATH;?>
add.png" alt="" /></div>
							</div>
						</li>
						<li class="content">
							<p>梨汁</p>
							<span><small>￥</small>43</span>
							<div class="cou">
								<div class="jian"><img src="<?php echo IMG_PATH;?>
jian.png" alt="" /></div>
								<span>2</span>
								<div class="add"><img src="<?php echo IMG_PATH;?>
add.png" alt="" /></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="img">
				<div><img src="<?php echo IMG_PATH;?>
gouwu.png"/></div>
				<span class="count">1</span>
			</div>
			<div class="text">
				<p class="price"></p>
				<del></del>
				<p class="fee">配送费3元</p>
			</div>
			<a>20元起送</a>
		</div>
		
		
	</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-11-02 09:05:04
  from 'E:\wamp64\www\10.24food\app\view\insertshop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdc13401ff980_40645407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c3d368f7f40cc8011b5510440bafa7bff406d3' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\insertshop.html',
      1 => 1541149492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdc13401ff980_40645407 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo CSS_PATH;?>
insertcate.css">

<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="layui-side layui-bg-black">
    <?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;"><!--内容主体区域-->

        <form class="layui-form" action="">

            <div class="layui-form-item">
                <label class="layui-form-label">所属分类</label>
                <div class="layui-input-block">
                    <select name="cid" lay-filter="required">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">店铺名称</label>
                <div class="layui-input-block">
                    <input type="text" lay-filter="required" name="shopname" placeholder="店铺名称" autocomplete="off" class="layui-input">
                </div>
            </div>


            <div class="layui-form-item">
                <label class="layui-form-label">店铺公告</label>
                <div class="layui-input-block">
                    <input type="text" name="notice" placeholder="店铺公告" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">配送信息</label>
                <div class="layui-input-block">
                    <input type="text" lay-filter="required" name="fee" placeholder="配送信息" autocomplete="off" class="layui-input">
                </div>
            </div>



            <div class="layui-form-item">
                <label class="layui-form-label">店铺理念</label>
                <div class="layui-input-block">
                    <input type="text" name="slogan" placeholder="店铺口号" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">店铺类型</label>
                <div class="layui-input-block">
                    <input type="text" name="stype" placeholder="店铺种类" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">联系方式</label>
                <div class="layui-input-block">
                    <input type="text" lay-filter="required" name="phone" placeholder="联系方式" autocomplete="off" class="layui-input">
                </div>
            </div>
            <!--缩略图-->
            <div class="laui-form-item">
                <label class="layui-form-label"></label>
                <ul class="imgBox1">

                </ul>
            </div>

            <div class="layui-form-item" >
                <label class="layui-form-label">上传缩略图</label>
                <button type="button" class="layui-btn" id="test2">
                    <i class="layui-icon">&#xe67c;</i>上传图片
                </button>
            </div>
            <input type="hidden" name="thumb" >

            <!--店铺实景图片-->
            <div class="laui-form-item">
                <label class="layui-form-label"></label>
                <ul class="imgBox">

                </ul>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">店铺实景图</label>
                <button type="button" class="layui-btn" id="test1">
                    多图片上传
                </button>
            </div>
            <input type="hidden" name="views">

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="submit">立即提交</button>
                </div>
            </div>
        </form>


    </div>
</div>

<div class="layui-footer">
    版权信息
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
insertshop.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

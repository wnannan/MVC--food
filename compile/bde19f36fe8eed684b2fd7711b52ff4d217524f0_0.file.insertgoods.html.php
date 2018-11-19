<?php
/* Smarty version 3.1.33, created on 2018-11-15 07:56:27
  from 'E:\wamp64\www\10.24food\app\view\insertgoods.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed26ab665cd4_07419145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde19f36fe8eed684b2fd7711b52ff4d217524f0' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\insertgoods.html',
      1 => 1542268584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bed26ab665cd4_07419145 (Smarty_Internal_Template $_smarty_tpl) {
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

        <form class="layui-form" action="" >

            <div class="layui-form-item">
                <label class="layui-form-label">所属店铺</label>
                <div class="layui-input-block">
                    <select name="sid" lay-filter="shop">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value['shopname'];?>
 </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">所属分类</label>
                <div class="layui-input-block">
                    <select id="gid" name="gid">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
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
                <label class="layui-form-label">食品名称</label>
                <div class="layui-input-block">
                    <input type="text" lay-filter="required" name="title" placeholder="食品名称" autocomplete="off" class="layui-input">
                </div>
            </div>


            <div class="layui-form-item">
                <label class="layui-form-label">食品描述</label>
                <div class="layui-input-block">
                    <input type="text" name="des" placeholder="食品描述" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">折扣价</label>
                <div class="layui-input-block">
                    <input type="number" lay-filter="required" name="discount" placeholder="折扣价" autocomplete="off" class="layui-input">
                </div>
            </div>



            <div class="layui-form-item">
                <label class="layui-form-label">现价</label>
                <div class="layui-input-block">
                    <input type="number" name="price" placeholder="现价" autocomplete="off" class="layui-input">
                </div>
            </div>
            <!--缩略图-->
            <div class="laui-form-item">
                <label class="layui-form-label"></label>
                <ul class="imgBox">

                </ul>
            </div>
            <div class="layui-form-item" >
                <label class="layui-form-label">上传缩略图</label>
                <button type="button" class="layui-btn" id="test2">
                    <i class="layui-icon">&#xe67c;</i>上传图片
                </button>
            </div>
            <input type="hidden" name="thumb" >

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
insertgoods.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-11-03 07:03:00
  from 'E:\wamp64\www\10.24food\app\view\managegtype.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdd4824c7bac4_04183592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cdcefab5dae5ea818a28a979423ff0be129d28' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\managegtype.html',
      1 => 1541228580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdd4824c7bac4_04183592 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <style>
        .layui-table-cell {
            height: 30px;
        }
    </style>

    <div class="layui-side layui-bg-black">
        <?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">

            <?php echo '<script'; ?>
 type="text/html" id="toolbarDemo">
                <div class="layui-btn-container">
                    <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
                    <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
                    <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
                </div>
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/html" id="barDemo">
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
            <?php echo '</script'; ?>
>
            <div class="demoTable">
                搜索gid：
                <div class="layui-inline">
                    <input class="layui-input" name="gid" id="gid" autocomplete="off">
                </div>
                搜索title：
                <div class="layui-inline">
                    <input class="layui-input" name="title" id="title" autocomplete="off">
                </div>
                搜索店铺名称：
                <div class="layui-inline">
                    <input class="layui-input" name="shopname" id="shopname" autocomplete="off">
                </div>
                <button class="layui-btn search" data-type="reload">搜索</button>
            </div>
            <table id="table" lay-filter="test"></table>
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
managegtype.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}

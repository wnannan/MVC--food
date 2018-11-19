<?php
/* Smarty version 3.1.33, created on 2018-11-04 01:04:24
  from 'E:\wamp64\www\10.24food\app\view\managegoods.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bde4598cab835_42601069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0037616701bac3d98c2fb02e9ea53d6eabff7491' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\managegoods.html',
      1 => 1541293464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bde4598cab835_42601069 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <style>
        .layui-table-cell {
            height: 90px;
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
                    <button class="layui-btn layui-btn-sm" lay-event="delete">删除</button>
                </div>
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/html" id="barDemo">
                <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
            <?php echo '</script'; ?>
>

            <div class="demoTable">
                搜索ID：
                <div class="layui-inline">
                    <input class="layui-input" name="id" id="id" autocomplete="off">
                </div>
                搜索食品：
                <div class="layui-inline">
                    <input class="layui-input" name="title" id="title" autocomplete="off">
                </div>
                搜索所属分类：
                <div class="layui-inline">
                    <input class="layui-input" name="cname" id="cname" autocomplete="off">
                </div>
                <button class="layui-btn" data-type="reload">搜索</button>
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
managegoods.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}

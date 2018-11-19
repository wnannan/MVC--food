<?php
/* Smarty version 3.1.33, created on 2018-11-04 00:10:48
  from 'E:\wamp64\www\10.24food\app\view\slide.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bde3908925976_95934527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '058169c06e919c4a3748a523a34ecf92565ba11f' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\slide.html',
      1 => 1541290244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bde3908925976_95934527 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="layui-side-scroll">
    <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
    <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">管理栏目</a>
            <dl class="layui-nav-child">
                <dd><a href="/10.24food/index.php/managecate/insert">添加栏目</a></dd>
                <dd><a href="/10.24food/index.php/managecate">查看栏目</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">管理店铺</a>
            <dl class="layui-nav-child">
                <dd><a href="/10.24food/index.php/manageshop">添加店铺</a></dd>
                <dd><a href="/10.24food/index.php/manageshop/query1">查看店铺</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">店铺商品分类管理</a>
            <dl class="layui-nav-child">
                <dd><a href="/10.24food/index.php/managegtype">添加商品分类</a></dd>
                <dd><a href="/10.24food/index.php/managegtype/query">查看商品分类</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">店铺食品管理</a>
            <dl class="layui-nav-child">
                <dd><a href="/10.24food/index.php/managegoods">添加食品</a></dd>
                <dd><a href="/10.24food/index.php/managegoods/query1">查看食品</a></dd>
            </dl>
        </li>
    </ul>
</div><?php }
}

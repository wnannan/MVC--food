<?php
/* Smarty version 3.1.33, created on 2018-10-29 14:10:15
  from 'E:\wamp64\www\10.24food\app\view\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd714c70b3914_30819012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0b2e0afd50ed8a8736e6b4e4be68ebf03e563d' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\header.html',
      1 => 1540822214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd714c70b3914_30819012 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>food后台管理</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">food后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->

        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['thumb'];?>
" class="layui-nav-img">
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>

                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>
<?php }
}

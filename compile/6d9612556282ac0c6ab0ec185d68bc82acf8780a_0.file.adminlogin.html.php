<?php
/* Smarty version 3.1.33, created on 2018-10-25 02:45:43
  from 'E:\wamp64\www\10.24food\app\view\adminlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd12e57f3ee58_50081522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9612556282ac0c6ab0ec185d68bc82acf8780a' => 
    array (
      0 => 'E:\\wamp64\\www\\10.24food\\app\\view\\adminlogin.html',
      1 => 1540435542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd12e57f3ee58_50081522 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
adminlogin.css">

</head>
<body>
    <div class="box">
        <h2>food(cms)后台登录</h2>

        <form class="layui-form" action="">
            <div class="layui-form-item">

                <div class="layui-input-block">
                    <label class="layui-form-label layui-icon layui-icon-username"></label>
                    <input type="text" name="username" required  lay-verify="required|username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block  ">
                    <label class="layui-form-label layui-icon layui-icon-password"></label>
                    <input type="password" name="password" required lay-verify="required|password" placeholder="请输入密码" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">登录</button>
                </div>
            </div>
        </form>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adminlogin.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

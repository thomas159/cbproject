<?php
/* Smarty version 3.1.30, created on 2016-10-27 16:40:53
  from "C:\xampp\htdocs\cb\templating\templates\productlist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581211f5475a76_07663447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bfba6b79a4ace8d0d1b9da7813c593548f09e35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cb\\templating\\templates\\productlist.tpl',
      1 => 1477579251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581211f5475a76_07663447 (Smarty_Internal_Template $_smarty_tpl) {
?>
include __DIR__ . "/vendor/autoload.php";

require_once 'smarty.php';
require_once 'db.php';

  $stmt = $pdo->prepare('SELECT id, name FROM product');
  $stmt->execute();
  $product = $stmt->fetchAll();

  $smarty->assign('product',$product);
  $smarty->display('productlist.tpl');<?php }
}

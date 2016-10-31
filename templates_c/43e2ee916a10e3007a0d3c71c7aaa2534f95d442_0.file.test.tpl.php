<?php
/* Smarty version 3.1.30, created on 2016-10-27 11:50:44
  from "C:\xampp\htdocs\cb\templating\templates\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811cdf4ecacc8_16439719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e2ee916a10e3007a0d3c71c7aaa2534f95d442' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cb\\templating\\templates\\test.tpl',
      1 => 1477561843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5811cdf4ecacc8_16439719 (Smarty_Internal_Template $_smarty_tpl) {
?>
<strong><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</strong>
  <?php echo $_smarty_tpl->tpl_vars['address']->value['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['city'];
}
}

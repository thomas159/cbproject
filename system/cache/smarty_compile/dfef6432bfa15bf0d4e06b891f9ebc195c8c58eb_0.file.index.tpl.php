<?php
/* Smarty version 3.1.30, created on 2016-10-31 15:11:40
  from "C:\xampp\htdocs\cbproject\system\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5817511cc5c8f6_49766114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfef6432bfa15bf0d4e06b891f9ebc195c8c58eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cbproject\\system\\views\\index.tpl',
      1 => 1477922985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5817511cc5c8f6_49766114 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>

INDEX.TPL

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
  <li>
    <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>

  </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul><?php }
}

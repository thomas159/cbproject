<?php
/* Smarty version 3.1.30, created on 2016-10-31 15:09:21
  from "C:\Users\maxwe\gd\sites\codingbootcamp\projects\webshop\system\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581750918c6ae2_67224655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5208079e58669e1e71ac74826460da6efbdcd53f' => 
    array (
      0 => 'C:\\Users\\maxwe\\gd\\sites\\codingbootcamp\\projects\\webshop\\system\\views\\index.tpl',
      1 => 1477909762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581750918c6ae2_67224655 (Smarty_Internal_Template $_smarty_tpl) {
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

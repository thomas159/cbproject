<?php
/* Smarty version 3.1.30, created on 2016-10-31 11:38:06
  from "C:\Users\maxwe\gd\sites\codingbootcamp\projects\webshop\system\views\homepage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58171f0e67d6d2_09789266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9083c17fcbfc235448feb7b9b2ab0afb2ee5e96f' => 
    array (
      0 => 'C:\\Users\\maxwe\\gd\\sites\\codingbootcamp\\projects\\webshop\\system\\views\\homepage.tpl',
      1 => 1477910229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58171f0e67d6d2_09789266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>My Eshop</title>
</head>

<body>

<div class="container-fluid">
<h1>Best WebShop in the Universe</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h2>
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

    </ul>

    
    


</div>
<?php echo '<script'; ?>
 src="/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/script.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

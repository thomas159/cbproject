<?php include __DIR__ . "/vendor/autoload.php";

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->default_modifiers = array('escape');

$smarty->display('productlist.tpl');
<?php include __DIR__ . "/vendor/autoload.php";

require_once 'smarty.php';
require_once 'db.php';

  $stmt = $pdo->prepare('SELECT id, name FROM product');
  $stmt->execute();
  $product = $stmt->fetchAll();

  $smarty->assign('product',$product);
  $smarty->display('productlist.tpl');
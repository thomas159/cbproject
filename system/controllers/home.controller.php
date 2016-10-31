HOMEPAGE

<form method="post" action="">
  <input type="text" name="min_price" value="" />
  <input type="submit" value="Submit" />
</form>

<?php

if(!empty($_POST['min_price']))
{
  $min_price = (float)$_POST['min_price'];
}

if(!empty($min_price))
{
  $min_price_condition = " `price` > :min_price";
}
else
{
  $min_price_condition = "1";
  $min_price = null;
}

$result = db::execute("

  SELECT `product`.*
  FROM `product`
  WHERE {$min_price_condition}

", array(

  ':min_price' => $min_price

));
var_dump($min_price_condition);
var_dump($result->fetchAll());
?>


<?php $smarty->display('index.tpl'); ?>

<?php
$index_tpl_rendered = $smarty->fetch('index.tpl');
var_dump($index_tpl_rendered);
?>
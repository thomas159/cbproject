<?php 

define('DOCROOT',__DIR__);
require(DOCROOT.'/system/config/bootstrap.php');

$controller = router::getController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> My Page </title>
</head>
<body>


<nav>
  <a href="index.php">Home</a>
  <a href="index.php?page=contact">Contact form</a>
  <a href="index.php?page=products">Products</a>
</nav>

<?php include($controller); ?>

</body>
</html>


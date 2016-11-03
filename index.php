<?php

define('DOCROOT', __DIR__);
require(DOCROOT.'/system/config/bootstrap.php');

request::loadRequest();
$controller_name = router::getControllerName();

// start output buffering
ob_start();

router::runController($controller_name);
//var_dump($controller);
// end output buffering and return the contents of the buffer
echo ob_get_clean();


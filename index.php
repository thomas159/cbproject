<?php

define('DOCROOT', __DIR__);
require(DOCROOT.'/system/config/bootstrap.php');

request::loadRequest();
$controller_name = router::getControllerName();

$controller_file = router::getControllerFile($controller_name);

$controller_class = $controller_name.'_controller';

// start output buffering
ob_start();

// we include the controller that we determined should be used
include($controller_file);

$controller = new $controller_class();
$controller->run();

// end output buffering and return the contents of the buffer
echo ob_get_clean();


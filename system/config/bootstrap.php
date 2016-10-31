<?php

define('SYSTEM_DIR',DOCROOT. '/system');
// config - project config
define('CACHE_DIR',SYSTEM_DIR. '/cache');
// config - for our project configuration
define('CONFIG_DIR',SYSTEM_DIR. '/config');
// controllers
define('CONTROLLERS_DIR',SYSTEM_DIR. '/controllers');
// for globally usable classes
define('LIB_DIR',SYSTEM_DIR. '/lib');
// models - db connections
define('MODELS_DIR',SYSTEM_DIR. '/models');
// for 3rd party
define('VENDOR_DIR',SYSTEM_DIR. '/vendor');
// for our templates
define('VIEWS_DIR',SYSTEM_DIR. '/views');




//config
require_once(LIB_DIR.'/config.class.php');

//router
require_once(LIB_DIR.'/router.class.php');
//db
require_once(LIB_DIR.'/db.class.php');

//vendor
require_once(VENDOR_DIR.'/autoload.php');

// load config of our project
config::load();

var_dump(config::get('smarty_config_dir'));
var_dump(config::get('meh'));

$smarty = new Smarty();
$smarty->setTemplateDir(VIEWS_DIR);
$smarty->setCompileDir(CACHE_DIR.'/smarty_compile');
$smarty->setConfigDir(CONFIG_DIR.'/smarty_config');
$smarty->setCacheDir(CONFIG_DIR.'/smarty_cache');
$smarty->default_modifiers = array('escape');


?>
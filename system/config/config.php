<?php
//var_dump(file_exists(VIEWS_DIR.'/'));
$config = array(
    //url 
    'url_base' => 'http://codingbootcamp.exercises.bem',


    //database
    'db_host' => 'localhost',
    'db_database' => 'bootcamp',
    'db_user' => 'root',
    'db_pass' => '',
    'db_charset' => 'utf8',



    //smarty
    'smarty_config_dir' => CONFIG_DIR.'/smarty_config',
    'smarty_template_dir' => VIEWS_DIR.'/',
    'smarty_compile_dir' => CACHE_DIR.'/smarty_compile',
    'smarty_cache_dir' => CACHE_DIR.'/smarty_cache',

);
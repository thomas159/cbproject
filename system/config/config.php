<?php

$config = array(

  'url_base' => 'cbproject.dev',

  //database
  'db_host' => 'localhost',
  'db_name' => 'bootcamp',
  'db_user' => 'root',
  'db_pass' => '',
  'db_charset' => 'utf8',

  //smarty
  'smarty_config_dir' => CONFIG_DIR.'/',
  'smarty_template_dir' => VIEWS_DIR.'/',
  'smarty_compile_dir' => CACHE_DIR. '/smarty_compile/',
  'smarty_cache_dir' => CACHE_DIR.'/smarty_cache/',
);
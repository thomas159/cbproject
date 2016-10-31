<?php

class config
{

  protected static $data = array();

  public static function load()
  {
    // Initialize empty array
    $config = array();

    // Include the config file and hope that there is some $config within 
    include(CONFIG_DIR.'/config.php');

    //get the configuration data from a file
    
    var_dump($config);

    //put it in static::$data
    static::$data = $config;
  }

  

  public static function get($name, $default = null)
  {

    //if data with $name exists in static::$data
    if(array_key_exists($name, static::$data))
    {
    //return that data 
    return static::$data[$name];
    }
    else
    {
    return $default;
    }

  }

}






?>
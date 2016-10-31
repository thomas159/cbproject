<?php

class router
{

  public static function getControllerName()
  {
    // we get the page name from $_GET
    if(isset($_GET['page'])) // if there is a value with the name 'page' in the URL
    {
      $page = $_GET['page']; // initialize the variable $page with that value
    } 
    else // in other case
    {
      $page = 'homepage'; // initialize the variable $page with the value 'homepage'
    }


    // if a controller file exists with this name
    $file_name = $page . '.controller.php';
    $file_path = CONTROLLERS_DIR . '/' . $file_name;
    if(file_exists($file_path))
    {
      // return the path to that file
      return $page;
    }
    else
    {
      // return the path to the error 404 file
      return 'error404';
    }
  }

  public static function getControllerFile($controller_name)
  {
    return CONTROLLERS_DIR . '/' . $controller_name . '.controller.php';
  }


}
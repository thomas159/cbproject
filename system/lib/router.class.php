<?php
  
class router
{

  public static function getController()
  {
    //if page isset get page and initialize variable else initialize hommepage
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    // if a controller file exists with this name 
    //return the path to that file
    //else 
    // return the path to the error 404 file

    $file_name = $page.'.controller.php';
    if(file_exists(CONTROLLERS_DIR.'/'.$file_name))
    {
      //return path to file
      return CONTROLLERS_DIR.'/'.$file_name;
      }
      else
      {
      return CONTROLLERS_DIR.'/error404.controller.php';
      }
      
    }

  }

 
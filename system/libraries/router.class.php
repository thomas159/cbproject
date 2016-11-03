<?php

class router
{

  public static function getControllerName()
  {
    // we get the page name from $_GET request library
      $page = request::get('page', 'homepage');


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
    public static function runController($controller_name){
        $controller_file = router::getControllerFile($controller_name);

        $controller_class = $controller_name.'_controller';

        // we include the controller file
        include($controller_file);
        // create the controller object
        $controller = new $controller_class();
        // run the controller
        $controller->run();
}

}
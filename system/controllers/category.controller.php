<?php

class category_controller
{
  public function run()
  {
    $layout = new view('category/layout');

    // we get the category uri from URL
    $category_uri = request::get('category', null);

    // if category uri was found in the URL, try to find that category
    if($category_uri)
    {
      // select the category from the database based on the $category_uri
      $query = "
        SELECT `category`.*
        FROM `category`
        WHERE `category`.`uri` = :category_uri
        LIMIT 1
      ";
      $substitutions = array(
        ':category_uri' => $category_uri
      );
      $result = db::execute($query, $substitutions);
      $category = $result->fetch();
      if(!$category) 
      {
        // end the execution of this controller and display a 404 error
        router::runController('error404');
        return;
      }
      else
      {
        // we have a category
        $info_view = new view('category/category_info');
        $info_view->category = $category;
        $layout->category_info = $info_view;

        // select the subcategories and print them
        $subcategories_view = new view('category/subcategories');
        $query = "
          SELECT `category`.*
          FROM `category`
          WHERE `category`.`parent_id` = :category_id
          ORDER BY `category`.`name` ASC
        ";
        $substitutions = array(
          ':category_id' => $category['id']
        );
        $results = db::execute($query, $substitutions);
        $subcategories_view->categories = $results;
        $layout->subcategories = $subcategories_view;
      }
    }
    else
    {
       // print the detail of the whole eshop
    }


    presenter::present($layout);
  }

}
<?php

class homepage_controller
{

  public function run()
  {
    $homepage = new view('homepage/homepage');

    $homepage->top_products = new view('homepage/top_products');
    $query = "
      SELECT `product`.*
      FROM `product`
      WHERE `product`.`is_top` = 1
      ORDER BY `product`.`name` ASC
    ";
    $results = db::execute($query);
    $homepage->top_products->products = $results;
    

    // Categories
    $categories = new view('homepage/categories');
    $query = "Select * FROM category ORDER BY 'name' ASC";
    $results = db::execute($query);
    $categories->categories = $results;
    $homepage->categories = $categories;


    // shop info
    $homepage->shop_info = 'SHOP_INFO';

    presenter::present($homepage);
  }

}



?>
<?php

class product_controller
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
    
    $categories = new view('homepage/categories');
    $homepage->categories = 'CATEGORIES';

    $homepage->shop_info = 'SHOP_INFO';

    presenter::present($homepage);
  }

}



?>
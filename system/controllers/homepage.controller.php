<?php

class homepage_controller
{

  public function run()
  {
      //create the $homepage from the view class
    $homepage = new view('homepage/homepage');

    // top products get them and add them to the $homepage view
    $homepage->top_products = new view('homepage/top_products');
    $query = "
      SELECT product.name, product.price, product_image.filename as filename, product_image.product_id as product_id
FROM product
INNER JOIN product_image
ON product.id=product_image.product_id
where product.is_top = 1 and product_image.order=1
ORDER BY product.name ASC
    ";
    $results = db::execute($query);
    $homepage->top_products->products = $results;

    // end top products

    // categories get them and add them to the home page view
    $homepage->categories = new view('homepage/categories');
      $query = "
      SELECT `category`.*
      FROM `category`
       WHERE parent_id is NULL 
      ORDER BY `category`.`name` ASC
     
    ";
      $results = db::execute($query);
      $homepage->categories->category = $results;

    // end categories


    // start shop info section of homepage
    $homepage->shop_info = new view('homepage/shop_info');

    presenter::present($homepage);
  }

}

?>
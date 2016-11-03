<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 10/27/2016
 * Time: 2:13 PM
 */



class product_list_controller
{

    public function run()
    {
        $product_list = new view('product_list/product_list');
        $product_uri = request::get('cat_id', null);

            $query = "
              SELECT `product`.*
FROM `product`
INNER JOIN `category_has_product`
ON `product`.`id` = `category_has_product`.`product_id`
WHERE `category_has_product`.`category_id` = :product_uri
ORDER BY `product`.`name` ASC
            ";

            $substitutions = array(
                ':product_uri' => $product_uri
            );

            $results = db::execute($query,$substitutions);

            $product_list->products = $results;
            // end products


        presenter::present($product_list);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 10/27/2016
 * Time: 2:13 PM
 */


class product_details_controller
{

    public function run()
    {
        $layout=new view('product_info/layout');
        $add_to_cart = new view('product_info/add_to_cart');
        $layout->add_to_cart = $add_to_cart;
        $product_details = new view('product_info/product_details');
        $product_details_uri = request::get('product_id', null);
 //var_dump($product_details_uri);
        //create query to get product detail
            $query = "
              SELECT `product`.*
              FROM `product`
              WHERE `product`.`id`= :product_details_uri
            ";

            $substitutions = array(
                ':product_details_uri' => $product_details_uri
            );

            $results = db::execute($query,$substitutions);
            // add result object to the product_details view as product
            $product_details->product = $results;
            // end products
            // add the products_details view to the layout view
            $layout->product_details = $product_details;

            // create the gallery view object
            $product_gallery = new view('product_info/product_gallery');
        //create query to get product gallery information
        $query = "
              SELECT product_image.filename as filename, product_image.product_id as product_id
              FROM product
              INNER JOIN product_image
              ON product.id=product_image.product_id
              where product.id = :product_details_uri
            ";

        $substitutions = array(
            ':product_details_uri' => $product_details_uri
        );

        $results = db::execute($query,$substitutions);
        // add result object to the product_gallery view as gallery
        $product_gallery->gallery = $results;
        // end gallery

        // add the products_details view to the layout view
        $layout->product_details = $product_details;


            // add the product_gallery view to the layout view
        $layout->product_gallery = $product_gallery;
        // send layout view to the presenter
        presenter::present($layout);
    }

}

?>
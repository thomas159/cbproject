<?php

class homepage_controller
{

  public function run()
  {
    // create a new smarty object
    $smarty = view::smarty();
    $smarty->assign('heading', 'TOPMENU');
    // display the topmenu.tpl template with that smarty object
    $smarty->display('topmenu.tpl'); 

    // prepare a query to select all the products
    $query = "
      SELECT `products`.*
      FROM `products`
    ";
    // execute the query and store the results
    $results = db::execute($query);

    

    // create a new smarty object
    $smarty = view::smarty();
    // assign the value 'My heading' into the object under the name heading
    $smarty->assign('heading', 'My heading');
    // assign the set of results into the object under the name results
    $smarty->assign('results', $results);
    // display the index.tpl template with that smarty object
    $index_tpl_contents = $smarty->fetch('index.tpl'); 
//var_dump($index_tpl_contents);
    echo $this->wrapContentsInHTML($index_tpl_contents);

    return;



    $footer = new view('footer');
    $footer->heading = 'Footer';
    $footer->current_date = date('j. n. Y');
    $footer->menu = view::smarty()->fetch('topmenu.tpl');
    $footer->name_of_site = 'My eshop';

    echo $footer;
  }

  public function wrapContentsInHTML($content)
  {
    $wrapper = new view('html_wrapper');
    $wrapper->content = $content;
    return $wrapper;
  }

}



?>
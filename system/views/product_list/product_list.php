<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/2/2016
 * Time: 2:50 PM
 */
?>
<ul id="product_list">
   <?php //var_dump($products_list);?>

<?php foreach($products as $product) : ?>
    <?php  $product_id = "?product_id=". $product['id'] ."&page=product_details"; ?>
    <?php //var_dump($category); ?>
    <li>
        <a href=<?php echo $product_id; ?>><?php echo $product['name']; ?></a>
    </li>
<?php endforeach; ?>
</ul>
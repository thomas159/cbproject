

<ul id="product_details">
   

<?php foreach($product as $product) : ?>
    
    <?php //var_dump($category); ?>
    <li>
        <?php echo $product['name']; ?>
    </li>
    <li>
        <?php echo $product['description']; ?>
    </li>
    <li>
        <?php echo $product["price"]." czk"; ?>
    </li>
<?php endforeach; ?>
</ul>
<div class="row">

    <?php foreach($products as $product) : ?>

        <div class="col-xs-4">
            <div class="jumbotron topprdimg" id="topproductcard">
            <div class="row"><?php echo $product['name']; ?></div>
            <div class="row">
                <img src=<?php echo "./media/product/" . $product['product_id'] . "/" . $product['filename'] ?>>
            </div>
                <div class="row">
            <div class="price"><?php echo $product['price']; ?> Kč</div>
                </div>
        </div>
        </div>
    <?php endforeach; ?>

</div>
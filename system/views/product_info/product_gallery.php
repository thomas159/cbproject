<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/2/2016
 * Time: 10:01 PM
 */
?>



    <?php foreach($gallery as $gallery) : ?>

      <img class="gallery_image" src=<?php echo "./media/product/" . $gallery['product_id'] . "/" . $gallery['filename'] ?>>

    <?php endforeach; ?>



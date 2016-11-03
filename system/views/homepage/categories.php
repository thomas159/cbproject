<span>Shop by Category</span>
<ul id="category_list">
    <li>
        <a href="index.php?page=category&category='null'">ALL Categories</a>
    </li>

  <?php foreach($category as $value) : ?>

      <?php $href_detail = "index.php?page=category&category=" . $value['uri'] ?>
    <li>
        <a href="<?= $href_detail ?>" ><?= $value['name']?></a>

    </li>
<?php endforeach; ?>
</ul>

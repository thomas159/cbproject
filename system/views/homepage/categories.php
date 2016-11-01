<ul>
  <li>
     <a href="index.php?page=category">All product categories</a>
  </li>
  <?php foreach($categories as $category) : ?>
    <li>
      <?php echo $category['name']; ?>
    </li>
  <?php endforeach; ?>
</ul>
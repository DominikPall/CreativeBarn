<?php 
  include 'nav&foot/header.php';
?>

<title>Creative Barn</title>
<link rel="stylesheet" href="css/product.css">
<?php 
  include_once 'nav&foot/navbar.php';
?>

<div id="down">
  <?php
    $product = new Product();
    $product->createProduct($_GET['q']);
  ?>
</div>

</body>
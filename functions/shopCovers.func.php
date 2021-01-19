<?php
    include_once '../classes/product.class.php';
    $product = new Product();
    $product->createShop($_GET['q']);
?>
<?php
    require_once 'models/Product.php';

    $product = new Product();   
    $products = $product->getProducts();

    require_once 'views/products/show.view.php';
?>

<?php

    if ( class_exists( 'Products' ) ) 
        $products = new Products();

    // instructions: if the form was submitted, add the product to the wishlist or remove it from the wishlist (if it's already in the wishlist)
    $product_id = $_POST['id'];
    $products->toggleWishlist($product_id);
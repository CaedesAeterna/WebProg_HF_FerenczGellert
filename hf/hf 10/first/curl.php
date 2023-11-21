<?php



function get_total_cart_value($user_id)
{
    $user_carts_url = "https://fakestoreapi.com/carts/" . $user_id;

    if (!$user_carts_json = file_get_contents($user_carts_url)) {
        die('Error fetching user carts: ' . $user_carts_url);
    }


    $user_cart = json_decode($user_carts_json, true);

    //var_dump($user_cart);

    $total_value = 0.0;

    //var_dump($user_cart['products']);

    foreach ($user_cart['products'] as $product) {
        foreach ($product as $key => $value) {
            if ($key == 'price') {
                echo $key;
                echo $value;

                $total_value += $value;
            }
        }

        $product_url = "https://fakestoreapi.com/products/" . $product['productId'];
        $product_json = file_get_contents($product_url);
        $product_details = json_decode($product_json, true);

        $total_value += $product_details['price'] * $product['quantity'];
    }

    return $total_value;

}




$user_id = 2;  


echo "The total value of the cart for user " . $user_id . " is: " . get_total_cart_value($user_id);
?>
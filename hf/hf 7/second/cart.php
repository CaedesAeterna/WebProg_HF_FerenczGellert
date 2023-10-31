<?php
session_start();


// Initialize the cart as an empty array
$cart = [];

// Check if the cart cookie is set and decode it

if (isset($_SESSION['cart'])) {
    $cart = json_decode($_SESSION['cart'], true);
}

function getProductById($products, $productId)
{
    foreach ($products as $product) {
        if ($product['id'] == $productId) {
            return $product;
        }
    }
    return null;
}


if (isset($_POST['remove_from_cart'])) {
    $productId = $_POST['product_id'];

    if (isset($cart[$productId]) && $cart[$productId]['quantity'] > 1) {
        $cart[$productId]['quantity']--;
    } else {
        unset($cart[$productId]);
    }

    // Set the cart cookie with the updated cart data
    setcookie('cart', json_encode($cart), time() + 3600, "/");
}

// Calculate the total price of the cart

$totalPrice = 0.0;

foreach ($cart as $productId => $item) {
    $totalPrice += $item['price'] * $item['quantity'];
}





?>

<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>

    <ul>
        <?php foreach ($cart as $productId => $item) { ?>
            <li>
                <form method="post">
                    <?php echo $item['name']; ?> - $
                    <?php echo $item['price']; ?>
                    (Quantity:
                    <?php echo $item['quantity']; ?>)
                    <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                    <input type="submit" name="remove_from_cart" value="Remove from Cart">
                </form>
            </li>
            <?php


        } ?>

        <?php

        echo 'Total Price: ' . $totalPrice;
        ?>
    </ul>



</body>

</html>
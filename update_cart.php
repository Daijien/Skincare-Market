<?php
include "connection.php";

if (isset($_POST['quantity']) && is_array($_POST['quantity'])) {
    $quantities = $_POST['quantity'];

    foreach ($quantities as $cart_id => $quantity) {
        $cart_id = intval($cart_id);
        $quantity = intval($quantity); // Ensure quantity is sanitized

        if ($quantity > 0) {
            // Update the quantity in the cart table
            $query = mysqli_query($konek, "UPDATE cart SET quantity = $quantity WHERE cart_id = $cart_id");
        } else {
            // Remove the item from the cart table if quantity is 0
            $query = mysqli_query($konek, "DELETE FROM cart WHERE cart_id = $cart_id");
        }
    }

    // Redirect back to cart page
    header("Location: cart.php");
    exit;
} else {
    echo "Invalid request.";
}
?>
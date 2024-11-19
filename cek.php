<?php
    session_start();

    $user_id = $_POST['user_id'];
    $item_id=$_POST['item_id'];
    $quantity=$_POST['quantity'];
    include "connection.php";

    $query=mysqli_query($konek, "SELECT *FROM cart where user_id='$user_id' and item_id='$item_id'");
    $data=mysqli_fetch_array($query);
    if(mysqli_num_rows($query)>0){
        $new_quantity=$data['Quantity']+$quantity;
        $updateQuery=mysqli_query($konek, "UPDATE cart set quantity='$new_quantity' where user_id='$user_id' and item_id='$item_id'");

        if($updateQuery){ 
            include "product_details.php";
            // echo "<script>alert('Item updated to cart successfully!'); window.location.href='product_details.php';</script>";
        }
    } else {
        $addQuery=mysqli_query($konek, "INSERT into cart VALUES ('', '$user_id', '$item_id', '$quantity')");
        if($addQuery){
            include "product_details.php";
        //    echo "<script>alert('Item added to cart successfully!'); window.location.href='product_details.php';</script>";
        }
    }

?>
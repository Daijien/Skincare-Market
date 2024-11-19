<?php

    include "connection.php";
    session_start();
   
    $user_id = $_SESSION['User_ID'];
    $item_id=$_POST['item_id'];
    $quantity=$_POST['quantity'];
    $total=$_POST['total'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $query=mysqli_query($konek, "SELECT*FROM user where user_id='$user_id' and password='$password'");

    $cek = mysqli_num_rows($query);
    if($cek > 0) {
       $transaction=mysqli_query($konek, "INSERT INTO transaction VALUES ('','$user_id','$item_id','$quantity','$total','$address')");

       if($transaction){
        $updateStock=mysqli_query($konek, "UPDATE item set stock=stock-$quantity where item_id=$item_id");
        header("location: transaction_success.php");
       }
    }
    else {
        
        exit();
    } 

?>  
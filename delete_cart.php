<?php

session_start();
include "connection.php";

$cart_id=$_GET['cart_id'];
$user_id=$_SESSION['user_id'];

$query=mysqli_query($konek, "DELETE from cart where cart_id=$cart_id");

if($query){
header("location: cart.php");}

?>
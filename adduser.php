<?php

include "connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
$PIN=$_POST['PIN'];
$username=$_POST['username'];

$query=mysqli_query($konek,"INSERT INTO user 
VALUES('','$email','$password', '$PIN', '$username')"
) or die(mysqli_error($konek));
if($query){
    echo "berhasil";
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:brand.php");
    }else{
    header("location:login.php?pesan=gagal");
    }

?>
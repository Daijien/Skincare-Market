<?php

include "connection.php";
$email=$_POST['email'];
$pass=$_POST['password'];
$passcek=$_POST['passwordcek'];
$username=$_POST['username'];

if ( $email != '' && $username != '' && $pass != null ){
    if ( $pass = $passcek ) {
    $query=mysqli_query($konek,"INSERT INTO user VALUES('','$email','$password', '', '$username')") or die(mysqli_error($konek));
    if($query){
        echo "berhasil";
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
            header("location:brand.php");
        }else{
            header("location:register.php?pesan=gagal");
        }
    } else {
        header("location:register.php?pesan=gagal");

    }
} else {
    header("location:register.php?pesan=kosong");
}


?>
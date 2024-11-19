<?php
    include "connection.php";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpass = $_POST['repeatpass'];

    $id = $_POST['user_id'];

    if ( $password == $repeatpass )
    {
        $query = mysqli_query($konek, "UPDATE user SET Email = '$email', Username = '$username', Password = '$password' WHERE User_ID = '$id'");
        header("location:brand.php");
    }

?>
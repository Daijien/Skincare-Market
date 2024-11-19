<?php
    session_start();
    $query=new mysqli('localhost', 'root', '', 'beautyshop');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = mysqli_query($query,"select * from user where email='$email' and password='$password'") or die (mysqli_error($query));
    $cek = mysqli_num_rows($data);

    if ($email != '' && $password !='') {
        if($cek > 0) {
            $user = mysqli_fetch_assoc($data); // Fetch the user data as an associative array
        $_SESSION['User_ID'] = $user['User_ID']; // Set user ID in session
        $_SESSION['email'] = $user['email'];
            $_SESSION['status'] = "login";
            header("location:Brand.php");
        }
        else {
            header("location:Log_in.php?pesan=gagal");
        } 
    } else {
        header("location:Log_in.php?pesan=kosong");
    }
 ?>
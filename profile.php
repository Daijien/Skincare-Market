<?php
session_start();

if (!isset($_SESSION['User_ID'])) {
    header("location:login.php");
}

$user_id = $_SESSION['User_ID']; // Retrieve user ID from session
include "connection.php"; // Include database connection
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    
    <title>Document</title>
</head>

<body>
   <?php include "navbar.php"; ?>
   <br>

    <div class="container" style="height: 100vh;">
        <h4><b>PROFILE</b></h4>
        <br><br>
        <div class="row">
            <div class="col">
                <i class="bi bi-person-circle" style="font-size: 400px; color: #FF5C8D;"></i>
            </div>

            <div class="col">
                <form action="profileupdate.php" method="POST">
                <?php
                    include "connection.php";

                    $id = $_SESSION['User_ID'];
                    
                    $query = mysqli_query($konek, "SELECT * FROM user WHERE User_ID ='$id'");
                    while ( $data = mysqli_fetch_array($query) )
                    {
                    echo "
                        <h5> Username</h5> 
                        <input type='text' class='form-control' name='username' value='" . $data['Username'] . "'>
                        <br>
                        <h5> Email</h5> 
                        <input type='text' class='form-control' name='email' value='" . $data['Email'] . "'>
                        <br>
                        <h5> Password</h5> 
                        <label>Masukkan password baru</label>
                        <input type='password' class='form-control' name='password' value='" . $data['Password'] . "'  >
                        <br>
                        <h5> Repeat Password</h5>   
                        <input type='password' class='form-control' name='repeatpass' value='" . $data['Password'] . "'>

                        <input type='hidden' name='user_id' value='" . $id . "'>
                        ";
                    }                                

                    echo "<br><br><button type='submit' class='btn'>Update Information</button> 
                ";
                ?>
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>


<style>

    form .btn {
        background-color: #FF5C8D;
        color: white;
    }

    

</style>
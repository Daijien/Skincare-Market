<?php
session_start();

if (!isset($_SESSION['User_ID'])) {
    header("location:login.php");
}

$user_id = $_SESSION['User_ID']; // Retrieve user ID from session
include "connection.php"; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>

<body>
    <?php include "navbar.php"?>

    <div class="container mt-5" style="height: 100vh;">
        <br>
            <form action="searchbrand.php" class="d-flex" role="search" method="POST">
                <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline" type="submit"><i class="bi bi-search" style="color: #FF5C8D;"></i></button>
            </form>
            <br>

        <div class="hasil">
            <form action="product_details.php" method="POST">
                <?php
                include "connection.php";

                if (isset($_POST['cari'])) {
                    $mencari = $_POST['cari'];
                    $query = mysqli_query($konek, "SELECT * FROM item WHERE name LIKE '%$mencari%'");
                    $cek = mysqli_num_rows($query);

                    if ( $cek > 0) {
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <button type="submit" name="item_id" value="<?php echo $data['Item_ID']; ?>">
                            <div class="kotak">
                                <div class="atas" style="height: 300px;">
                                    <img src="img/<?php echo $data['Brand_ID']; ?>/<?php echo $data['Item_ID']; ?>.jpg" alt="" style="height: 190px;"> 
                                    <label style="display: block;" for="item_id"><?php echo $data['name']; ?></label>
                                </div>
                                <div class="bawah"> 
                                    <p style="margin-bottom: 0%; text-align: right; "><?php echo "<b>Rp" . number_format($data['Price']) . "</b>" ?></p>
                                </div>
                            </div>
                    </button>

                    <?php } } else {
                        echo "<p class='text-danger'>Produk tidak ditemukan.</p>";
                    }
                } else {
                        echo "<p class='text-danger'>Produk tidak ditemukan.</p>";
                    }
                ?>
            </form>
        </div>
    </div>
    
    <br>
    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

<style>
    .container form {
        outline: none;
    }

    .container form input{
        width: 95%;
    }

    .container form input {
        border: solid 1px #FF5C8D;
        color: #FF5C8D;
    }

    .container form input::placeholder {
        color: #FF5C8D;
        outline: none;
    }

    .hasil form button {
        background-color: #EEEEEE;
        border: none;
        /* border: solid 1px black; */
        border-radius: 5px;
        margin: 7px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    .kotak {
        background-color: transparent;
        /* border: solid 1px #96989A; */
        margin: 5px; 
        padding: 5px;
        width: 200px;
        height: 350px;
        display: flex;
        flex-direction: column;
        align-items: left;
        text-align: left;
    }
</style>

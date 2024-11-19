<!-- Navbar, head, dll -->

<!-- Back to home -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <title>Brand</title>
</head>

    <body>

        <!-- Navbar -->
    <header>
        <h3 style="font-weight: 800;">Luminelle.</h3>
        <nav>
            <ul class="nav_links" style="margin-left: -50px;">
                <li><a href="brand.php">Brand</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="Profile.php">Profile</a></li>
            </ul>
        </nav>

        <div class="row" style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
            <div class="col-2">
            <a href="cart.php"><i class="bi bi-cart"></i></a>
            </div>

            <div class="col">
            <a class="nav-link" href="logout.php"><button>Log Out</button></a>                
            </div>
        </div>
    </header>

    <br>
    <div class="d-flex justify-content-center">
    <img src="img/checkmark.png" alt="checkmark" width= "300px">
    </div>

    <div class="d-flex justify-content-center">
    <h3>Your payment is successfull!</h3>
    </div>

    <div class="d-flex justify-content-center">
    <p>Thank you for your purchase. An automated payment receipt will be sent to your registered email.</p>
    </div>

    <div class="d-flex justify-content-center">
    <a class="btn btn-primary" href="brand.php">Back to home</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<style>
/* navbar */
    header nav ul li, a, button {
        font-weight: 500;
        font-size: 16px;
        color: pink;
        text-decoration: none;
    }

    .row .col-2 a i{
        font-size: 20px;
    }

    .row a:hover {
        color: black;
    }

    .nav-links li a {
        transition: all 0.3s ease 0;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        padding: 30px 10%;
        height: 50px;
        margin-top: 20px;
        /* border-bottom: solid 1px black; */
    }

    nav {
        display: flex;
        align-items: center;
    }

    .nav_links {
        display: flex;
        list-style: none;
        margin: 0; 
        padding: 0; 
    }

    .nav_links li {
        margin: 0 10px; /* Beri jarak antar elemen */
    }

    .nav_links li:hover {
        border-bottom: solid 2px pink;
    }

    .nav_links li a:hover {
        color: black;
    }

    header button {
        padding: 0px 20px;
        height: 30px;
        background-color: black;
        border: none;
        border-radius: 10px;
        color: pink;
        cursor: pointer;
    }

    header button:hover {
        background-color: pink;
    }

</style>
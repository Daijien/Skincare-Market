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
    <?php include "navbar.php"; ?>
    <br><br>

    <div class="wrapper d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
        <div class="d-flex justify-content-center">
        <i style="font-size: 150px; color: #FF5C8D"class="bi bi-x-circle"></i>
        </div>

        <div class="d-flex justify-content-center">
        <h3>Your payment is failed!</h3>
        </div>

        <div class="d-flex justify-content-center">
        <p>Make sure your password is correct.</p>
        </div>

        <div class="d-flex justify-content-center">
        <a class="btn" href="Product.php" style="color: white;">Continue Shopping</a>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .btn {
        border: none;
        background-color:  #FF5C8D;
        /* color: white; */
    }

    .btn:hover{
        background-color:  black;
        color: #FF5C8D;
    }
</style>

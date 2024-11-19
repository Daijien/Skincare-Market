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
    <header>
        <h3 style="font-weight: 800;">Luminelle.</h3>
        <nav>
            <ul class="nav_links" style="margin-left: -50px;">
                <li><a href="brand.php">Brand</a></li>
                <li><a href="product.php">Product</a></li>
            </ul>
        </nav>

        <div class="row" style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
            <div class="col-2">
            <a href="cart.php"><i class="bi bi-cart"></i></a>
            </div>
        
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-start">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<style>
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

    header nav ul li a{
        font-weight: 500;
        font-size: 20px;
        color: #FF5C8D;;
        text-decoration: none;
    }

    .row .col-2 a i{
        font-size: 20px;
        color: black;;
    }

    .row a i:hover {
        color: #FF5C8D;
    }

    .nav-links li a {
        transition: all 0.3s ease 0;
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
        border-bottom: solid 2px #FF5C8D;;
    }

    .nav_links li a:hover {
        color: black;
    }

    .col .dropdown button {
        border: none;
        background-color: black ;
    }
</style>
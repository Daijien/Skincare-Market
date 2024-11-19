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
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </nav>
        <a class="nav-link" href="#contact"><button>Contact</button></a>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

<style>
     header nav ul li, a{
        font-weight: 500;
        font-size: 20px;
        color: #FF5C8D;
        text-decoration: none;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        padding: 30px 10%;
        height: 50px;
        margin-top: 20px;
    }

    header nav {
        display: flex;
        align-items: center;
    }

    header nav .nav_links {
        display: flex;
        list-style: none;
        margin: 0; 
        padding: 0; 
    }

    header nav ul li {
        margin: 0 10px; /* Beri jarak antar elemen */
    }

    header nav ul li:hover {
        border-bottom: solid 2px #FF5C8D;
    }

    header nav ul li a:hover {
        color: black;
    }

    header a button {
        padding: 0px 20px;
        height: 35px;
        background-color: black;
        border: none;
        border-radius: 10px;
        color: white;
        cursor: pointer;
    }
</style>
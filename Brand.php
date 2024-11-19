<?php
    session_start();
    if(empty($_SESSION['User_ID']))
    {
    header("location:index.php?pesan=belum_login");
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <title>Brand</title>
</head>

<body>
<?php include "navbar.php"; ?>
<br>

<section class="slide">
    <div class="container">
        <div class="wrapper">
            <br>
            <form action="searchbrand.php" class="d-flex" role="search" method="POST">
                <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline" type="submit"><i class="bi bi-search" style="color: #FF5C8D;"></i></button>
            </form>
            <br>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/s1.jpeg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                    <img src="img/s2.jpeg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                    <img src="img/s3.jpeg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Isi web -->
    
    <section class="isiweb">
        <div class="container">
            <div class="wrapper">
                <div class="wrap" style="text-align: center;">
                    <div class="main">
                        <form action="product.php" method="POST">
                        <?php
                            include "connection.php";
                            $no = 0;
                            $query=mysqli_query($konek," SELECT Brand_ID, name from brand;");
                                while($data=mysqli_fetch_array($query))
                                { $no++; ?>
                            <button type="submit" name="brand_id" value="<?php echo $data['Brand_ID']; ?>"><img src="img/<?php echo $data['Brand_ID']; ?>.png" alt="" style="height: 200px;"></button> 
                        <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
/* Slide */
    .slide {
        width: 100%;
        height: 100vh;
    }

    .slide .container .wrapper .wrap input{
        width: 700px;
    }

    .slide .container .wrapper form {
        outline: none;
    }

    .slide .container .wrapper form input {
        border: solid 1px #FF5C8D;
        color: #FF5C8D;
    }

    .slide .container .wrapper form input::placeholder {
        color: #FF5C8D;
        outline: none;
    }

    #carouselExampleAutoplaying {
        height: 80vh;
    }


/* isi */
    .isiweb .container {
        width: 100%;
        height: 100vh;
    }

    .search {
        width: 100vh;
        border: none;   
        border-bottom: solid 1px black;
        outline: none;
        margin-bottom: 20px;
    }

    .wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .main {
        width: 70rem;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; 
        text-align: left;
    }

    .main button {
        border: none;
        /* border: solid 1px #96989A; */
        background: transparent;
        padding: 0;
        margin: 5px; 
        display: inline-flex;
        /* background-color: #E0E0E0; */
        border-radius: 10px;
    }

    .main img {
        opacity: 0.7;
        transition: opacity 0.3s;
        margin: 5x;

    }

    .main img:hover {
        opacity: 1;
    }

</style>
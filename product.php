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
    <title>Brand</title>
</head>

<body>
    <?php include "navbar.php"; ?>

<!-- Isi web -->
    <section class="isiweb">
        <div class="container">
            <!-- <br>
                <form action="searchbrand.php" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline" type="submit"><i class="bi bi-search"></i></button>
                </form> -->
            <br> 

            <div class="wrapper" style="display: flex;">
                
                <form action="query/sorting.php" method="POST" class="col-2" style="margin-right: 20px;">
                    <h4>Filter</h4>
                    <hr>
                    <h6>Pengurutan</h6>
                    <select class="form-select" name="opsi" >
                        <option value="name ASC">A - Z</option>
                        <option value="name DESC">Z - A</option>
                        <option value="Price ASC">Harga terendah</option>
                        <option value="Price DESC">Harga tertinggi</option>
                    </select>

                    <hr>
                    <h6>Harga</h6>
                    <div class="harga" style="display: flex; margin-top: 10px;">
                        <input type="text" name="min" placeholder="Rp Min" style="width: 85px;"> 
                        <p style="margin: 0px 5px 0px 5px;"> - </p>
                        <input type="text" name="max" placeholder="Rp Max" style="width: 85px;"> 
                    </div>
                    <br>   
                                        
                    <div class="buton" style="display: flex; width: 100%; gap: 2px">
                        <button type="submit" style="width: 100%;">Terapkan</button>
                        <button type="reset" style="width: 100%;">Hapus</button>
                    </div>
                </form>

                <div class="wrap" style="text-align: center;">
                    <form action="product_details.php" method="POST">
                        <?php
                            include "connection.php";

                            // get nilai dari header
                            $orderBy = isset($_GET['order']) ? $_GET['order'] : "RAND()";
                            $pricemin = isset($_GET['min']) ? $_GET['min'] : null;
                            $pricemax = isset($_GET['max']) ? $_GET['max'] : null;

                            if ( isset($_POST['brand_id']) )
                                $brand_id = $_POST['brand_id'];
                            else {
                                $brand_id = null; 
                            }
                                    

                            echo "<div class='main'>";

                            if ( isset($pricemin) && isset($pricemax) )
                            {                            
                                if ( isset($brand_id) )
                                    $query = mysqli_query($konek, "SELECT * FROM item WHERE brand_id='$brand_id' AND Price BETWEEN $pricemin AND $pricemax ORDER BY $orderBy");
                                else
                                    $query = mysqli_query($konek, "SELECT * FROM item WHERE Price BETWEEN $pricemin AND $pricemax ORDER BY $orderBy LIMIT 30");
                            }
                            else 
                            {
                                if (  isset($brand_id)  )
                                    $query = mysqli_query($konek," SELECT * FROM item WHERE brand_id='$brand_id' ORDER BY $orderBy");
                                else 
                                    $query = mysqli_query($konek," SELECT * FROM item ORDER BY $orderBy LIMIT 30");
                            }

                            while($data = mysqli_fetch_array($query))
                            { 
                            ?>
                                <button type="submit" name="item_id" value="<?php echo $data['Item_ID']; ?>">
                                <div class="kotak">
                                    <div class="atas" style="height: 350px;">
                                        <img src="img/<?php echo $data['Brand_ID']; ?>/<?php echo $data['Item_ID']; ?>.jpg" alt="" style="height: 140px;"> 
                                        <label style="display: block; font-size: 15px;" for="item_id"><?php echo $data['name']; ?></label>
                                    </div>
                                    <div class="bawah">
                                        <p style="margin-bottom: 0%; text-align: right; "><?php echo "<b>Rp" . number_format($data['Price']) . "</b>" ?></p>
                                    </div>
                                </div>
                                </button>  
                    
                            <?php }
                            echo "</div>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- footer -->
    <br>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
/* isi */
    .wrapper .col-2 button {
        border: none;
        background-color: #FF5C8D;
        color: white;
        border-radius: 5px;
    }

    .wrapper .col-2 button:hover {
        background-color: black;
        color: #FF5C8D;
    }

    .search {
        width: 100vh;
        border: none;   
        border-bottom: solid 1px black;
        outline: none;
        margin-bottom: 20px;
    }

    .main {
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; 
        text-align: left;
    }

    .main button{
        background-color: #EEEEEE;
        border: none;
        /* border: solid 1px black; */
        border-radius: 5px;
        margin: 7px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);c
    }

    .main img {
        /* opacity: 0.7;
        transition: opacity 0.3s; */
        margin: 5x;

    }

     .kotak {
        background-color: transparent;
        /* border: solid 1px #96989A; */
        margin: 5px; 
        padding: 5px;
        width: 150px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: left;
        text-align: left;
    }
</style>
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
<!-- Navbar -->
    <?php include "navbar.php"; ?>
    <br>


<!-- Isi web -->
  <div class="container">
    <div class="wrapper">
        <?php
        include "connection.php";
         
        if(isset($_GET['item_id'])){
          $item_id=$_GET['item_id'];
        } elseif (isset($_POST['item_id'])){
          $item_id=$_POST['item_id'];
        }
      
       // $item_id=$_POST['item_id'];
        $query=mysqli_query($konek,"SELECT * FROM item WHERE item_id='$item_id';");
        while($data=mysqli_fetch_array($query))
        { 
            echo "<div class='row'>
                    <div class='col'>
                        <img src='img/" . $data['Brand_ID'] . "/" . $item_id . ".jpg' class='img-fluid'> <br>
                    </div>

                    <div class='col' style='align-items: stretch;'>  
                            <h1 style='margin-top: 20px;'>" . $data['name'] . "</h1>
                            <p style='font-size: 1.5rem; margin-bottom: 60%;'>Rp. " . number_format($data['Price']) . "</p>
                            
                            <div class='row' style='text-align: center;'>
                                <div class='col'>
                                    <button type='button' class='btn btn-action' data-bs-toggle='modal' data-bs-target='#exampleModalAddToCart'>Add to Cart</button>            
                                </div>
                                <div class='col'>
                                    <button type='button' class='btn btn-action' data-bs-toggle='modal' data-bs-target='#exampleModalBuyNow'>Buy Now</button>         
                                </div>   
                            </div>
                    </div>
                 </div>

                  <div class='row' style='margin-top: 10px;'>
                        <p style='text-align: center;'>Deskripsi</p><br><hr>
                        <p style='text-align: justify; white-space: pre-wrap; font-size: 15px;'>" . htmlspecialchars($data['Description']) . "</p><br>
                  </div>
                "; 
          } ?>
    </div>
  </div>

<!-- modal add cart -->
    <div class="container-fluid">
      <div class="modal fade" id="exampleModalAddToCart" tabindex="-1" aria-labelledby="exampleModalAddToCartLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalAddToCartLabel">Add to Cart</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          
            <div class="modal-body">
                <?php
                  include "connection.php";
                  //$item_id=$_POST['item_id'];

                  $query=mysqli_query($konek," SELECT * from item where item_id='$item_id';");
                  while($data=mysqli_fetch_array($query))
                  { ?>
                  <div class="row" style="justify-content: center;">
                    <img src="img/<?php echo $data['Brand_ID'] ?>/<?php echo  $item_id ?>.jpg" style="width: 200px; ">
                  </div>
                    <h4> <?php echo $data['name']; ?> </h4>
                    <p style="text-align: center;">Rp. <?php echo number_format($data['Price']); ?> </p><br>
                    <!-- <?php echo $data['stock']; ?> <br> -->
        
                    <form action="add_cart.php" method="POST" style="text-align: center;">
                      <input type="hidden" name="item_id" value="<?php echo $item_id?>">
                      <input type="hidden" name="user_id" value="<?php echo $user_id?>">

                      <input type="number" name="quantity" value="1" min="1" max="<?php echo $data['stock']; ?>">
                      <br><br>
                      <button type="submit" class="btn" style="width: 100%; background-color: #FF5C8D;">Add to Cart</button>
                    </form>
                  <?php }?>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Buy Now -->
    <div class="modal fade" id="exampleModalBuyNow" tabindex="-1" aria-labelledby="exampleModalBuyNowLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalBuyNowLabel">Buy Now</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <?php
            include "connection.php";
            //$item_id=$_POST['item_id'];

            $query=mysqli_query($konek," SELECT * from item where item_id='$item_id'");
            while($data=mysqli_fetch_array($query))
            { ?>
              <div class="row" style="justify-content: center;">
                <img src="img/<?php echo $data['Brand_ID'] ?>/<?php echo  $item_id ?>.jpg" style="width: 200px; ">
              </div>
              <h4> <?php echo $data['name']; ?> </h4>
              <p style="text-align: center;">Rp. <?php echo number_format($data['Price']); ?>  </p><br>

              <form action="buy_now.php" method="POST" style="text-align: center;" >
                <input type="hidden" name="item_id" value="<?php echo $item_id?>">
                <input type="hidden" name="brand_id" value="<?php echo $data['Brand_ID']; ?>">
                <input type="hidden" name="name" value="<?php echo $data['name']?>">
                <input type="hidden" name="price" value="<?php echo $data['Price']?>">

                <input type="number" name="quantity" value="1" min="1" max="<?php echo $data['stock']; ?>">
                <br><br>
                <button type="submit" class="btn" style="width: 100%; background-color: #FF5C8D;" >Buy Now</button>
              </form>
              <?php }?>
          </div>
        </div>
      </div>
    </div>

        <br>
        <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
   button .btn {
    background-color: #FF5C8D;
    border: none;
   }

    body {
        /* Sesuaikan dengan tinggi navbar */
        margin: 0;
        padding: 0;
    }

    .tombol {
       display: flex; 
       flex-direction: column; 
       align-items: stretch;
    }

    .nav-link {
        text-decoration: none;
        color: pink;
        font-size: 1rem;
    }

    .navbar{
        width: 100%;
        height: 70px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;  
        background: blue;
    }

    header {
        top: 0; left: 0; right: 0;  
    }

    .wrapper
    {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: auto;
        justify-content: center;
    }
/* 
    .wrapper #kiri, .wrapper #kanan {
        width: 450px;
    } */

    #exit {
        color: #FF78AC;
        font-size: 3rem;
        background-color: transparent;
        border: none;
        top: 10px;
        right: 10px;
    }

    .btn-action {
        background-color: #FF5C8D;
        width: 90%;
        height: 50px;
        color: white;
    }
    
    .btn-action:hover {
        color: #FF5C8D;
        background-color: white;
    }
    


</style>

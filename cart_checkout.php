<?php
session_start();

if (!isset($_SESSION['User_ID'])) {
    echo "g";
}

$user_id = $_SESSION['User_ID']; 
include "connection.php";

$item_id=$_POST['item_id'];
$brand_id=$_POST['brand_id'];
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=(int)$_POST['quantity'];
$total=$price*$quantity;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <title>Brand</title>
</head>

<body>
<!-- Navbar -->
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <h4> <b>Luminelle</b> </h4>
            <div class="rightcontent">
                <!-- logo keranjang -->
                <a href=""> <i class="bi bi-basket3" style="margin-right: 10px;"></i> </a>

                <div class="btn-group">
                    <button type="button" class="btn dropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="index.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<!-- Isi web -->
<div class="container text-center my-5">
    <!-- Search bar -->
    
    <hr class="mb-4">

        <table class="table text-center mb-4">
            
                <tr>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
          
            <tbody>
                <?php  
                $query=mysqli_query ($konek, "SELECT*from cart where user_id='$user_id'");

                while($data=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td>
                            <img src="img/<?php echo $brand_id; ?>/<?php echo $item_id; ?>.jpg" alt="Product Image" class="img-fluid" style="height: 100px;">
                        </td>
                        <td><h5><?php echo $name; ?></h5></td>
                        <td>Rp<?php echo number_format($price, 2); ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td>Rp<?php echo number_format($total, 2); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <hr class="mb-4">

    <!-- Address and Summary Section -->
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card p-3">
                <label for="address" class="form-label fw-bold">Address</label>
                <textarea name="address" id="address" class="form-control" rows="5" placeholder="Enter your delivery address"></textarea>
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <div class="card p-3">
                <h6 class="fw-bold text-success">Free Shipping</h6>
                <h6>Total Amount: <span class="fw-bold text-dark">$<?php echo number_format($total, 2); ?></span></h6>

                <form action="transaction"></form>
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalCheckout" onclick="setModalAddress()">Checkout</button>

                <div class="modal fade" id="exampleModalCheckout" tabindex="-1" aria-labelledby="exampleModalCheckoutLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="transaction.php" method="POST">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalCheckout">Checkout Confirm</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="body p-5">
                                <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                                <input type="hidden" name="address" id="modalAddress">

                                <label for="password">Enter password to finish your purchase</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Confirm Purchase</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        
<script>
function setModalAddress() {
    document.getElementById("modalAddress").value = document.getElementById("address").value;
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    body {
        padding-top: 60px; /* Sesuaikan dengan tinggi navbar */
        margin-top: 50px;
    }

    .brand {
        display: flex;
        flex-direction: row;
    }

    img {
        margin: 10px;
    }

    .search {
        width: 100vh;
        border: none;   
        border-bottom: solid 1px black;
        outline: none; /*buat ngilangin border pas diklik*/ 
        margin-bottom: 20px;
    }

 /* Navbar */

   
    a {
        text-decoration: none;
        color: pink;
    }

    .navbar {
        background: linear-gradient(to right, #FF4E88, #FF8C9E, #FF8C9E, #FFE1FF);  
    }

    h4 {
        margin: 10px;
    }
    

    .cart-wrapper {
        display: flex;
        justify-content: center;
        gap: 20px;
        align-items: center;
        flex-direction: row;
        /* border: 1px #000000 solid; */
        border-radius: 10px;
    }

    hr {
        border: none;
        height: 1px;
        background-color: black;
        margin:0;
    }

    td {
        width: 300px;
    }

    .updateQty {
        border: 1px black solid;
        border-radius: 5px;
        background-color: transparent;
        height: 24.28px;    
        width: 24.28px;    
    }
</style>
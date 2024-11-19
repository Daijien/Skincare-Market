
<?php
session_start();

if (!isset($_SESSION['User_ID'])) {
    echo "g";
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

<!-- Isi web -->
    <div class="container" style="text-align: center; height: 100vh;">

    <br>
    <form action="update_cart.php" method="POST">
        <h3>Cart</h3>
        <hr>
        <table>
            <?php
            $query = mysqli_query($konek, "SELECT c.cart_id, i.name, i.item_id, i.price, i.stock, c.quantity, c.quantity * price as total, i.brand_id FROM cart c JOIN item i ON c.item_id = i.item_id WHERE c.user_id='$user_id'");
            $row = mysqli_num_rows($query);

            if ($row <= 0) {
                echo "Cart is empty";
            } else {
                while ($data = mysqli_fetch_array($query)) { ?>
                    <tr id="row-<?php echo $data['cart_id']; ?>" style="border-bottom: solid 1px grey;">
                        <td><img src="img/<?php echo $data['brand_id']; ?>/<?php echo $data['item_id']; ?>.jpg" alt="" style="height: 180px;"></td>
                        <td style="vertical-align: top;"><h5><a href="product_details.php?item_id=<?php echo $data['item_id']?>"><?php echo $data['name']; ?></a></h5></td>
                        <td>Rp. <?php echo number_format($data['price']); ?></td>
                        <td>
                            <div class="input-group mb-3" style="width: 130px;">
                                <button class="input-group-text decrement-btn" data-id="<?php echo $data['cart_id']; ?>">-</button>
                                <input type="text" class="form-control text-center input-qty bg-white" id="qty-<?php echo $data['cart_id']; ?>" name="quantity[<?php echo $data['cart_id']; ?>]" value="<?php echo $data['quantity']; ?>" readonly>
                                <button class="input-group-text increment-btn" data-id="<?php echo $data['cart_id']; ?>">+</button>
                            </div>
                        </td>
                        <td>Rp. <?php echo number_format($data['total']); ?></td>
                    </tr>
                <?php }
            } ?>
        </table>
        <br>
        <?php if ($row > 0) {
        echo "<button type='submit' class='submit'>Update Cart</button>"; } ?>
    </form>

    </div>

    <?php include "footer.php"?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script>
      $(document).ready(function () {
    // Increment Quantity
    $('.increment-btn').click(function (e) {
        e.preventDefault();

        var cart_id = $(this).data('id'); // Get item_id from data-id
        var qtyInput = $('#qty-' + cart_id); // Select the specific input field
        var qty = parseInt(qtyInput.val(), 10);

        qty = isNaN(qty) ? 0 : qty;
        if (qty < 10) { // Optional limit
            qty++;
            qtyInput.val(qty);
        }
    });

    // Decrement Quantity
    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        var cart_id = $(this).data('id'); // Get item_id from data-id
        var qtyInput = $('#qty-' + cart_id); // Select the specific input field
        var qty = parseInt(qtyInput.val(), 10);

        qty = isNaN(qty) ? 0 : qty;
        if (qty > 1) { // Prevent going below 1
            qty--;
            qtyInput.val(qty);
        } else {
            window.location.href = 'delete_cart.php?cart_id=' + cart_id;
        }
    });
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    form table tr td h5 a {
        text-decoration: none;
        font-size: 20px;
        color: black;
    }

    img {
        margin: 10px;
    }

    
/* cart */
    .cart-wrapper {
        display: flex;
        justify-content: center;
        gap: 20px;
        align-items: center;
        flex-direction: row;
        /* border: 1px #000000 solid; */
        border-radius: 10px;
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

    form .submit {
        width: 200px;
        height: 40px;
        border: none;
        border: solid 1px #FF5C8D;
        border-radius: 5px;
        color: white;
        background-color: #FF5C8D;
    }

</style>

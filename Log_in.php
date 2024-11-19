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
    <?php  include "navbar_luar.php"; ?>

    <!-- login -->
    <section class="login">
        <div class="container"> 
            <p style="font-size: 90px; color: #FF5C8D; font-weight: 700; margin-top: -270px;">SIGN IN</p >
            <div class="wrapper" style="position: absolute;">
                <div class="sign-in">
                    <form action="logincheck.php" method="POST" style="margin-top: 30px;">
                        <br>
                        <p style="text-align: center; font-weight: 500;">
                        <?php 
                        if(isset($_GET['pesan'])){
                            if ($_GET['pesan'] == "gagal")
                                echo "Email atau Password Salah!";
                            else if ($_GET['pesan'] == "kosong")
                                echo "Harap Masukkan Email dan Password yang Sah!";
                        } else {
                            echo "Welcome Back!";
                        }
                        ?>                  
                        </p>  
                        <div class="mb-3">
                            <input type="text" class="forms" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3" >
                            <input type="password" class="forms" name="password" id="password" placeholder="Password">
                        </div>
                        <br>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                    <p style="margin-top: 10px; font-weight: 500;">New here? <a href="register.php">Create account</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col">
                        <h5 style="font-weight: 800; margin-bottom: 20px;">Luminelle.</h5>
                        <p class="isisub" style="vertical-align: bottom;">2024. Created by Cindy Nabella Susanto and Aulia Putri Naharani</p>
                    </div>

                    <div class="col">
                        <p class="subjudul">Payments</p>
                        <div class="box-bank">
                            <img src="img/bank/Mandiri.png" alt="Bank Mandiri">
                            <img src="img/bank/BCA.png" alt="Bank BCA">
                            <img src="img/bank/BRI.png" alt="Bank BRI">
                            <br>
                            <img src="img/bank/Bank_Raya.png" alt="Bank Bank_Raya">
                            <img src="img/bank/SeaBank.png" alt="Bank SeaBank">
                            <img src="img/bank/BSI.png" alt="Bank BSI">
                            <br>
                            <img src="img/bank/BNI.png" alt="Bank BNI">
                            <img src="img/bank/BTN.png" alt="Bank BTN">
                        </div>
                    </div>

                    <div class="col">
                        <p class="subjudul">Menu</p>
                        <a href="index.php#home">Home</a><br>
                        <a href="index.php#about">About Us</a>
                    </div>                    

                    <div class="col">
                        <p class="subjudul">Get in touch</p>
                        <p class="isisub">For newest update or asking for question</p>
                        <div class="icon">
                            <i class="bi bi-facebook"></i> 
                            <i class="bi bi-twitter-x"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

<style>
   *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

/* login */
    .login{
        width: 100%;
        height: 100vh;
    }

    .login .container {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login .wrapper {
        width: 450px;
        height: 350px;
        border-radius: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 70px;
        backdrop-filter: blur(7px);
        box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
    }

    .forms {
        width: 350px;
        height: 40px;
        background-color: transparent;
        border: solid 1px #FF5C8D;
        color: #FF5C8D;
        border-radius: 5px;
        padding-left: 20px;
        outline: none;
    }

    input::placeholder {
        color: #FF5C8D;
    }
    
    .login button {
        width: 100%;
        height: 40px;
        background-color: #FF5C8D;
        color: white;
    }

    .login a {
        color: #FF7777;
        text-decoration: underline;
    }

</style>
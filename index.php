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

    <?php include "navbar_luar.php"; ?>

    <!-- Home Screen -->
    <section class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg" style="margin-top: 15%; margin-left: 40px;">
                    <p style="font-size: 5rem; margin-bottom: -30px;"><b>Luminelle.</b></p>
                    <p style="font-size: 2rem;">Timeless Beauty, Timeless You</p>
                    <a href="login.php"><button type="button" class="btn" >Log In</button></a>
                </div>

                <div class="col-lg">
                    <img src="img/logohome.png" alt="Home" width="500vw" height="auto" style="position: relative;">
                </div>
            </div>
        </div>
    </section>    

    <!-- About Us  -->
    <section class="about" id="about">
        <div class="container">
            <p class="judul" ><b> About Us </b></p> 
            <p style="font-size: 20px; text-align: center;">Luminelle merupakan sebuah platform belanja online yang menyediakan berbagai produk kecantikan berkualitas untuk kulit wajah dan tubuh. Mulai dari berbagai brand internasional hingga brand lokal. Beberapa keunggulan kami lainnya: </p>
    
            <div class="wrapper">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-percent"></i>
                        <p class="card-text">Produk Terjamin Keaslian.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-truck"></i>
                        <p class="card-text">Pengiriman Cepat dan Terjamin ke Seluruh Indonesia.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-patch-check"></i>
                        <p class="card-text">Produk Terlengkap dan Berkualitas.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-cash-stack"></i>
                        <p class="card-text">Jaminan Uang kembali Ketika Produk Tidak Sesuai.</p>
                    </div>
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
                        <a href="#home">Home</a><br>
                        <a href="#about">About Us</a>
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

/* header */
   
/*  home */

    .home .container {
        margin-top: 20px;
        border-radius: 30px;
        background-color: #FBDAE5;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
    }

    .home {
        width: 100%;
        height: 100vh;
    }
    
    .home button {
        width: 200px;
        height: 40px;
        padding: 0px 20px;
        color: pink;
        background-color: black;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .home button:hover {
        background-color: white;
    }

    .home img {
        background-image: radial-gradient(circle, #EFA3C7, #EFA3C7, #FBDAE5, #FBDAE5, #FBDAE5);
    }

/* About */

    .about {
        width: 100%;
        height: 100vh;
    }

    .judul {
        font-size: 70px;
        color: pink;
        text-align: center;
    }

    .about .wrapper {
        width: 100%;
        color: black;
        display: flex;
        flex-wrap: wrap;
        flex-direction : row;
    }

    .card {
        display: flex;
        flex-direction: column;
        text-align: center;
        width: 200px;
        height: 200px;
        border: none;
        border-radius: 20px;
        background: linear-gradient(to right, pink, #FF7777);
        /* background-color: pink; */
        box-shadow: 0px 0px 20px rgba(0,0,0,0.05 );
    }

    .card .card-body p {
        font-size: 15px;
    }

    .card .card-body i {
        font-size: 60px;
    }

    .container .wrapper {
        margin-top: 50px;
        justify-content: center;
        gap: 6vw;
    }

/* footer */
    footer {
        margin-top: -50px;
        width: 100%;
        height: 25vh;
        background-color: pink;
    }

    .box-bank img {
        width: 50px;
        margin: 5px;
        opacity: 70%;
    }
    
    .icon i{
        color: white;
        margin-right: 10px;
    }

    footer .container .wrapper .row {
        padding-top: 20px;
    }

    footer .container .wrapper .row .col .subjudul {
        font-weight: 600;
    }

    footer .container .wrapper .row .col .isisub {
        color: grey;
        font-size: 12px;
    }

    footer .container .wrapper .row .col a {
        color: grey;
        font-weight: 400;
    }

    footer .container .wrapper .row .col a:hover {
        color: black;
    }

    .icon i {
        color: grey;
    }

</style>
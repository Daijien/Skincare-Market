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
<footer id="contact">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col">
                        <h5 style="font-weight: 800; margin-bottom: 20px; color: white">Luminelle.</h5>
                        <p class="isisub" style="vertical-align: bottom;">2024. Created by Cindy Nabella Susanto and Aulia Putri Naharani</p>
                    </div>

                    <div class="col">
                        <p class="subjudul" style="color: white;">Payments</p>
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

                    <!-- <div class="col">
                        <p class="subjudul" style="color: white">Menu</p>
                        <a href="#home">Home</a><br>
                        <a href="#about">About Us</a>
                    </div>                     -->

                    <div class="col">
                        <p class="subjudul" style="color: white">Get in touch</p>
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

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</html>

<style>
    /* footer */
    footer {
        /* margin-top: -50px; */
        width: 100%;
        height: 25vh;
        background-color: #FF5C8D;
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
        color: white;
        font-size: 12px;
    }

    footer .container .wrapper .row .col a {
        color: white;
        font-weight: 400;
    }

    footer .container .wrapper .row .col a:hover {
        color: black;
    }

    .icon i {
        color: white;
    }
</style>
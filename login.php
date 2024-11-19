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
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#about">About Us</a></li>
            </ul>
        </nav>
        <a class="nav-link" href="#contact"><button>Contact</button></a>
    </header>

    <!-- login -->
    <section class="login">
        <div class="container"> 
            <p style="font-size: 90px; color: #FCBDD7; font-weight: 700; margin-top: -270px;">SIGN IN</p >
            <div class="wrapper" style="position: absolute;">
                <div class="sign-in">
                    <form action="logincheck.php" method="POST" style="margin-top: 30px;">
                        <br>
                        <p style="text-align: center; font-weight: 500;">Welcome Back!</p>
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

/* header */
    header nav ul li, a, button {
        font-weight: 500;
        font-size: 16px;
        color: pink;
        text-decoration: none;
    }

    .nav-links li a {
        transition: all 0.3s ease 0;
    }

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
        border-bottom: solid 2px pink;
    }

    .nav_links li a:hover {
        color: black;
    }

    header button {
        padding: 0px 20px;
        height: 30px;
        background-color: black;
        border: none;
        border-radius: 10px;
        color: pink;
        cursor: pointer;
    }

    header button:hover {
        background-color: black;
    }

/* login */
    .login{
        width: 100%;
        height: 100vh;
        /* background: linear-gradient(to right, pink, #FF7777); */
        /* background-color: pink; */
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
        border: solid 1px #FCBDD7;
        color: #FCBDD7;
        border-radius: 5px;
        padding-left: 20px;
        outline: none;
    }

    input::placeholder {
        color: #FCBDD7;
    }
    
    .login button {
        width: 100%;
        /* border: solid 1px white; */
        background-color: #FCBDD7;
        color: white;
    }

    .login a {
        color: #FF7777;
        text-decoration: underline;
    }
    
/* footer */
    footer {
        /* margin-top: -50px; */
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
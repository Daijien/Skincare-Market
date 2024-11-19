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
<!-- login -->
    <section class="signup">
        <div class="container"> 
            <p style="font-size: 90px; color: #FF5C8D; font-weight: 700; margin-top: -370px;">SIGN UP</p >
            <div class="wrapper" style="position: absolute;">
                <div class="sign-up">
                    <form action="adduser.php" method="POST" style="margin-top: 30px;">
                        <br>
                        <p style="text-align: center; font-weight: 500;">
                        <?php 
                            if(isset($_GET['pesan'])){
                                if ($_GET['pesan'] == "gagal")
                                    echo "Password Tidak Sama!";
                                else if ($_GET['pesan'] == "kosong")
                                    echo "Harap Masukkan Data yang Sah!";
                            } else {
                                echo "Hello!";
                            }
                        ?>
                        </p>                    
                        <div class="mb-3">
                            <input type="text" class="forms" name="username" id="username" placeholder="Username">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="forms" name="email" id="email" placeholder="Email">
                        </div>
                        
                        <div class="mb-3">
                            <input type="password" class="forms" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="forms" name="passwordcek" id="password" placeholder="Repeat Password">
                        </div>

                        <button class="btn" type="submit">Sign Up</button>
                    </form>
                    <br>
                    <p>Already have an account? <a href="log_in.php">Sign In</a></p>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

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

/* signup */
    .signup{
        width: 100%;
        height: 100vh;
        /* background: linear-gradient(to right, pink, #FF7777); */
        /* background-color: pink; */
    }

    .signup .container {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .signup .container .wrapper {
        width: 450px;
        height: 450px;
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

    form input::placeholder {
        color: #FF5C8D;
    }
    
    form button {
        width: 100%;
        /* border: solid 1px white; */
        background-color: #FF5C8D;
        color: white;
    }

    .sign-up a {
        color: #FF5C8D;
        text-decoration: underline;
    }

    .sign-up a:hover {
        color: black;
        text-decoration: underline;
    }
</style>
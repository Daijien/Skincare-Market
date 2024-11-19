<?php
session_start();
if(empty($_SESSION['email']))
{
header("location:login.html?pesan=belum_login");
}
?>
<html>
<head>
<title>Halaman Session</title>
</head>
<body>
<?php
echo $_SESSION['email'];
?>
<br>
<a href="logout.php">Logout</a>
</body>
</html>
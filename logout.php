<?php
 session_start();
 session_destroy();
 // mengaktifkan session
 // menghapus semua session
 // mengalihkan halaman sambil mengirim pesan logout
 header("location:login.php");
 ?>
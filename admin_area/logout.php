<?php 

session_start();

session_destroy();

echo "<script>window.open('https://e-acez.com/signin.php', '_self')</script>";

?>
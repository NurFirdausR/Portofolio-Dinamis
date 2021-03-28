<?php 
session_start(); //digunakan untuk memulai session
session_destroy();


echo "<script>alert('Anda Logout')</script>";
// echo "<script>location='login.php';</script>";
// header('location:login.php');
header('location:portofolio.php');
?>
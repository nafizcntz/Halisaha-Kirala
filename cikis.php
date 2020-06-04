<?php ob_start();
session_start(); 
session_destroy();
header("location:uyegirisi.php");
ob_end_flush();
?>
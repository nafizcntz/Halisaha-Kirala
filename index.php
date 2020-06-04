<?php ob_start();
session_start();
session_destroy();
include "sabitseyler.php";
header('Location: bizkimiz.php');
ob_end_flush();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Anasayfa</title>
</head>
<body>
</body> 
</html>


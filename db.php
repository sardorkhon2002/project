<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

<?php 
$dbname = "tiketshop";
$dbuser = "root";
$dbpassword = "2763553Aa!O@d12345zxc+";
$hostname = "localhost";

$mysqli = new mysqli($hostname, $dbuser, $dbpassword, $dbname);
$mysqli->query("SET NAMES utf8");
?>
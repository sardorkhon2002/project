<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

<?php 
$dbname = "tickets";
$dbuser = "lakers";
$dbpassword = "D0HBw4ZiEO6USxj4";
$hostname = "localhost";

$mysqli = new mysqli($hostname, $dbuser, $dbpassword, $dbname);
$mysqli->query("SET NAMES utf8");
?>
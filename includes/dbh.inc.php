<?php

$servername = "localhost";
$dBUsername = "id16851825_steakhouse";
$dBPassword = 'e(SN{$GbuK9]Ms5y';
$dBName = "id16851825_lakers";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>


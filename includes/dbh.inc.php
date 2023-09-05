<?php


$serverName = "localhost";
$dBUsername = "root";
$dBPassword  = "";
$dBName = "productdb";
 
$conn = mysqli_connect("localhost", "root", "", "productdb");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}


?>
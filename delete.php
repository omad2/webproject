<?php
session_start();
include './includes/dbh.inc.php';

if (isset($_SESSION['userid'])) {
} else {
    header("location: ./index");
    exit();
}


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from crud WHERE id=$id;";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: user.php");
        exit();
    }
    else{
        die(mysqli_error($conn));
    }
}


?>
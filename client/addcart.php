<?php

session_start();
$_SESSION['userdata']['userid'];
include_once "../shared/connection.php";

$pid=$_GET['pid'];

$status = mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");

if($status){
    echo "Successfully Added to cart";
    header("location:view.php");
}
?>
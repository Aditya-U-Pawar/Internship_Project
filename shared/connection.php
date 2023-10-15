<?php
$conn=new mysqli("localhost","root","","project23");
if($conn->connect_error){
    echo "connection error";
    die;
}
?>
<?php

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];

session_start();
print_r($_SESSION['userdata']['userid']);
print_r($_POST);
echo "<br>";

print_r($_FILES['pdtimg']);
$prefix_path="../shared/images/";
$file_name=$prefix_path.$_SESSION['userdata']['userid'].date("d-m-Y-H-i-s").$_FILES['pdtimg']['name'];

move_uploaded_file($_FILES['pdtimg']['tmp_name'],$file_name);

include "../shared/connection.php";

$status=mysqli_query($conn,"insert into product(name,price,details,impath) values('$name',$price,'$details','$file_name')");

if($status){
    echo "product uploaded successfully";
    header("location:upload.php");
}
else{
    echo "Error in SQL Syntax";
    echo mysqli_error($conn);
    die;
}
?>
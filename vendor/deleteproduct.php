<?php

$pid=$_GET['pid'];
include_once "../shared/connection.php";

$status=mysqli_query($conn,"delete from product where pid=$pid");

if($status){
    echo "Deleted Successfully!";
    header("location:view.php");
}
else{
    echo "Error while deleting the product";
    echo mysqli_error($conn);
}

?>
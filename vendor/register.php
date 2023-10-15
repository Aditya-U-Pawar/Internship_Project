<?php

$uname=$_POST['uname'];
$upass=$_POST['pass1'];

$hash = md5($upass);

include "../shared/connection.php";



$status=mysqli_query($conn,"insert into vendor_user(user_name,password) values('$uname','$hash')");

if($status){
    echo "Registration Successfull";
    header("location:login.html");
}
else{
    echo "Error is SQL";
    echo mysqli_error($conn);
}

?>
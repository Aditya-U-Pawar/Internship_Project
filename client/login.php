<?php

$uname=$_POST['uname'];
$upass=$_POST['pass1'];

include "../shared/connection.php";

$sql_cursor = mysqli_query($conn,"select * from client_user where user_name='$uname' and password='$upass'");

if(mysqli_num_rows($sql_cursor)==0){
    echo "Invalid Credentials";
    die;
}

$row=mysqli_fetch_assoc($sql_cursor);
session_start();

$_SESSION['userdata']=$row;
$_SESSION['login_status']=true;
$_SESSION['username']=$row['username'];

echo "<h1>Login Successful</h1>";
header("location:menu.html")

?>
<?php

    session_start();
    if(!isset($_SESSION['login_status'])){
        echo "Unauthorised Attempt!";
        die;
    }

    if($_SESSION['login_status']==false){
        echo "Illegal Access";
        die;
    }

    include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center 
    align-items-center vh-100">
        <form action="upload_server.php" class="bg-primary p-3" enctype="multipart/form-data" method="post">
            <h3 class="text-center text-white">Upload Product</h3>

            <input class="mt-2 form-control text-danger" type="text" name="name" placeholder="Enter Product Name">

            <input class="m-2 form-control text-danger" type="text" name="price" placeholder="Enter Product Price">

            <textarea class="mt-2 form-control text-danger" name="details" id="" cols="30" rows="5" placeholder="Product Description"></textarea>

            <input class="m-2 form-control" type="file" name="pdtimg">

            <div class="text-center">
                <button class="btn btn-danger mt-3">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>
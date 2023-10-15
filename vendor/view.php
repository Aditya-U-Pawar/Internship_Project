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
<html lang="eng">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .flex{
                display: flex;
                flex-wrap: wrap;
            }
            .card{
                width: 250px;
                margin: 20px;
                border: 2px solid green;
                padding: 10px;
            }
            .img-wrapper{
                
            }
            .img-file{
                margin: auto;
                width: 200px;
                height: 150px;
            }
            .name{
                font-size: 24px;
            }
            .price{
                font-size: 26px;
            }
            .price-wrapper{
                border-bottom: 2px solid yellowgreen;
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php

include"../shared/connection.php";

$sql_cursor=mysqli_query($conn,"select * from product");

echo "<div class='flex'>";
while($row=mysqli_fetch_assoc($sql_cursor)){
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

    echo "<div class='card'>

        <div class='price-wrapper d-flex justify-content-between align-items-center'>
            <div class='name'>$name</div>
            <div class='price text-danger'>$$price</div>
        </div>    
        <div class='img-wrapper'>
            <img src='$impath' class='img-file'>
        </div>
        <div class='details'>$details</div>
        <div class='d-flex justify-content-around'>
            <div>
                    <button class='btn btn-warning'>Edit <i class='bi bi-pen'></i></button>
            </div>
            <div>
                <a href='deleteproduct.php?pid=$pid'>
                    <button class='btn btn-danger'>Delete <i class='bi-trash'></i></button>
                </a>
            </div>
        </div>

    </div>";
}

echo "</div>";

?>
<?php
    include("connect.php");
    $id =($_GET['id']);
    $drob ="DELETE FROM `products` where `id` = '$id'";
    $myy= mysqli_query($mysqlconn,$drob);  
    if($myy ){
        header("Location:viewpro.php");
    }
    ?>

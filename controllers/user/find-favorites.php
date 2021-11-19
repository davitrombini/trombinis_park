<?php
    include_once("../../database/connection.php");

    session_start();

    $user_id = $_SESSION["user_id"];

    $query = "select product_id from favorites where user_id = $user_id";
    $result = mysqli_query($connection, $query);

    $products_id = mysqli_fetch_all($result);
    
    $qtd = mysqli_num_rows($result);

    $products = array();

    foreach ($products_id as $product_id){
        $find = "select * from products where id = $product_id[0]";
        $find_result = mysqli_query($connection, $find);
        array_push($products, mysqli_fetch_assoc($find_result));
    }

    echo json_encode($products);

    mysqli_close($connection);
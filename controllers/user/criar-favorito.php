<?php
    session_start();

    if (!isset($_SESSION["user_id"])){
        header("Location: http://localhost/trombinis_park/src/pages/user/login.php");
    }

    include_once("../../database/connection.php");

    if (isset($_GET["id"])){
        $product_id = $_GET["id"];
        $user_id = $_SESSION["user_id"];

        $find = "select * from favorites where product_id = $product_id and user_id = $user_id";
        $result = mysqli_query($connection, $find);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $qtd = mysqli_num_rows($result);

        if ($qtd == 0){
            $query = "insert into favorites (product_id, user_id) 
                                values($product_id, $user_id)";

            $create_favorite = mysqli_query($connection, $query);
        }
        
        mysqli_close($connection);
        header("Location: http://localhost/trombinis_park/favoritos.php");
    }
?>
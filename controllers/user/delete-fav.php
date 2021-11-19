<?php
    include_once("../../database/connection.php");

    session_start();

    $user_id = $_SESSION["user_id"];

    if (isset($_GET["id"])){
        $product_id = $_GET["id"];
        $query = "delete from favorites where product_id = $product_id and user_id = $user_id";
        $delete = mysqli_query($connection, $query);
        header("Location: http://localhost/trombinis_park/favoritos.php");
    }

    mysqli_close($connection);
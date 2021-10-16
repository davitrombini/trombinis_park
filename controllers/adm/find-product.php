<?php
    session_start();

    if ($_SESSION["user_id"] != 1){
        header("Location: http://localhost/trombinis_park/");
    }

    include_once("../../database/connection.php");

    $id = $_GET["id"];
    $query = "select title, description, img from products where id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);

    mysqli_close($connection);
<?php
    include_once("../../database/connection.php");

    $query = "select * from products";
    $result = mysqli_query($connection, $query);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if ($result){
        echo json_encode($rows);
    }

    mysqli_close($connection);
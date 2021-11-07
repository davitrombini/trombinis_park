<?php
    include_once("../../database/connection.php");

    $query = "select * from products order by views desc limit 5";
    $result = mysqli_query($connection, $query);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $qtd = mysqli_num_rows($result);

    if ($result){
        echo json_encode($rows, $qtd);
    }

    mysqli_close($connection);
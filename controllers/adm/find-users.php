<?php
    session_start();

    if ($_SESSION["user_admin"] != 1){
        header("Location: http://localhost/trombinis_park/");
    }

    include_once("../../database/connection.php");

    $query = "select id, name, email, admin from users";
    $result = mysqli_query($connection, $query);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $qtd = mysqli_num_rows($result);

    if ($result){
        echo json_encode($rows, $qtd);
    }

    mysqli_close($connection);
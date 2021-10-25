<?php
    include_once("../../database/connection.php");

    $id = $_GET["id"];
    $query = "select name, email from users where id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);

    mysqli_close($connection);
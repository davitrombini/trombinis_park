<?php
    include_once("../../database/connection.php");
    
    $received_data = json_decode(file_get_contents("php://input"), true);

    $title = $received_data["title"];
    $desc = $received_data["desc"];
    $img = $received_data["img"];

    $query = "insert into products(title, description, img)
                            values('$title', '$desc', '$img')";

    $result = mysqli_query($connection, $query);

    if ($result){
        $response = array("message" => "Produto cadastrado com sucesso!");
        echo json_encode($response);
    } else {
        die("Ops, ocorreu um erro: " . mysqli_error($connection));
    }

    mysqli_close($connection);
<?php
    include_once("../../database/connection.php");

    $received_data = json_decode(file_get_contents("php://input"), true);

    $product_id = $received_data["id"];
    $product_title = $received_data["title"];
    $product_desc = $received_data["desc"];
    $product_img = $received_data["img"];
    
    $query = "update products set title = '$product_title', description = '$product_desc', img = '$product_img' where id = $product_id";
    mysqli_query($connection, $query);   

    $response = array("message" => "Brinquedo atualizado com sucesso!");
    echo json_encode($response);
	
    header("Location: http://localhost/trombinis_park/src/pages/adm/brinquedos.php");

    mysqli_close($connection);
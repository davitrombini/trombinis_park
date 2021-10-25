<?php
    include_once("../../database/connection.php");

    $received_data = json_decode(file_get_contents("php://input"), true);

    $user_id = $received_data["id"];
    $user_name = $received_data["name"];
    $user_email = $received_data["email"];
    $user_password = $received_data["password"];

    if ($user_password == null){
        $query = "update users set name = '$user_name', email = '$user_email' where id = $user_id";
        mysqli_query($connection, $query);
    } else {
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
        $query = "update users set name = '$user_name', email = '$user_email', password = '$hashed_password' where id = $user_id";
        mysqli_query($connection, $query);   
    }

    $response = array("message" => "Usuário atualizado com sucesso!");
    echo json_encode($response);
	
    header("Location: http://localhost/trombinis_park/src/pages/adm/usuarios.php");

    mysqli_close($connection);
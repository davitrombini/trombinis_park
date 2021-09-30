<?php
 	include_once('../../database/connection.php');

	$received_data = json_decode(file_get_contents('php://input'), true);
	
 	$name = $received_data['name'];
 	$email = $received_data['email'];
 	$password = $received_data['password'];
 	
 	$query = "insert into users(name, email, password, admin) 
								values('$name', '$email', '$password', false)";

 	$result = mysqli_query($connection, $query);

 	if ($result) {
		$response = array("message" => "Seu cadastro foi realizado com sucesso!");
		echo json_encode($response);
 	} else {
		die('Ops, ocorreu um erro: ' . mysqli_error($connection));
 	}

	mysqli_close($connection);
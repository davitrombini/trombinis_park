<?php
 	include_once('../../database/connection.php');

	$received_data = json_decode(file_get_contents('php://input'), true);
	
 	$name = $received_data['name'];
 	$email = $received_data['email'];
 	$password = $received_data['password'];

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
 	
 	$query = "insert into users(name, email, password, admin) 
								values('$name', '$email', '$hashed_password', false)";

 	$result = mysqli_query($connection, $query);

	$db_user_id = mysqli_insert_id($connection);

 	if ($result) {
		session_start();
		$_SESSION["user_id"] = $db_user_id;
		$_SESSION["user_name"] = $name;
		$_SESSION["user_email"] = $email;
		$response = array("message" => "Seu cadastro foi realizado com sucesso!");
		echo json_encode($response);
		header("Location: http://localhost/trombinis_park/");
 	} else {
		die('Ops, ocorreu um erro: ' . mysqli_error($connection));
 	}

	mysqli_close($connection);
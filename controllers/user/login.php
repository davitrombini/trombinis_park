<?php
include('../../database/connection.php');

$received_data = json_decode(file_get_contents('php://input'), true);

$email = $received_data['email'];
$password = $received_data['password'];

$query = "select * from users where email = '$email'";
$result = mysqli_query($connection, $query);

$db_user = mysqli_fetch_assoc($result);
$db_user_password = $db_user['password'];

$matching_password = password_verify($password, $db_user_password);

if (mysqli_num_rows($result) != 1) {
    $response = array("message" => "Usuário inexistente!");
    echo json_encode($response);
    exit();
} 

if($matching_password) {
    session_start();
    $_SESSION["user_id"] = $db_user['id'];
    $_SESSION["user_name"] = $db_user['name'];
    $_SESSION["user_email"] = $db_user['email'];
    $_SESSION["user_admin"] = $db_user['admin'];

    if ($_SESSION["user_admin"] == 1) {
        header("Location: http://localhost/trombinis_park/src/pages/adm/index.php");
        exit();
    } else {
        header("Location: http://localhost/trombinis_park/");
        exit();
    }
} else {
    $response = array("message" => "A senha está incorreta!");
	echo json_encode($response);
    exit();
}
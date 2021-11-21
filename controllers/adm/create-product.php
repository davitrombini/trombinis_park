<?php
    session_start();

    if ($_SESSION["user_id"] != 1){
        header("Location: http://localhost/trombinis_park/");
    }

    include_once("../../database/connection.php");

    

    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $img = $_POST["img"];


    print_r($_REQUEST);die;
    $target_dir = "../img/products";
    $target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
    $uploadOk=1;

    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
        echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $query = "insert into products(title, description, img, views)
                            values('$title', '$desc', '$img', 0)";

    $result = mysqli_query($connection, $query);

    if ($result){
        $response = array("message" => "Produto cadastrado com sucesso!");
        echo json_encode($response);
        header("Location: http://localhost/trombinis_park/src/pages/adm/brinquedos.php");
    } else {
        die("Ops, ocorreu um erro: " . mysqli_error($connection));
    }

    mysqli_close($connection);
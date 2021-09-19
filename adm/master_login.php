<?php
     //pegando dados
     $email = $_POST['email'];
     $senha = hash("sha512", $_POST['senha']);

     //debug
     //echo $senha; die;
    
    require_once("../db/def_database.php");

    /* apenas uma ideia

    $stmt = $conn->prepare("SELECT email, senha FROM tbl_usuarios WHERE email = ? AND senha = ?");
    $stmt->

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $conn->close();

    $data = $result->fetch_all(MYSQLI_ASSOC);

    */
    
    $stmt = $conn->prepare("SELECT * FROM tbl_usuarios WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();


    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    $data = $result->fetch_all(MYSQLI_ASSOC);

    // debug - número de linhas encontradas
    //echo 'registros encontrados ' . sizeof($data);

    //debug resultado
     //print_r($data);


    if(sizeof($data) == 0){
        return false;
        die;
    }


    //TODO criar sessions e redirecionar para o index.php do ADM.
    
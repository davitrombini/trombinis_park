<?php
    include_once("../../database/connection.php");

    session_start();

    if (isset($_GET["delete-product"])){
        $id = $_GET["delete-product"];
        $query = "delete from products where id = $id";
        $delete = mysqli_query($connection, $query);
        $_SESSION["message"] = "Brinquedo deletado com sucesso";
        header("Location: http://localhost/trombinis_park/src/pages/adm/brinquedos.php");
    }
    if (isset($_GET["delete-user"])){
        $id = $_GET["delete-user"];
        $query = "delete from users where id = $id";
        $delete = mysqli_query($connection, $query);
        $_SESSION["message"] = "Usuário deletado com sucesso";
        header("Location: http://localhost/trombinis_park/src/pages/adm/usuarios.php");
    }
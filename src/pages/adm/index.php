<?php
    session_start();

    if ($_SESSION["user_admin"] != 1){
        header("Location: http://localhost/trombinis_park/");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="../../css/home-adm.css">
    <script src="../../../../semantic/dist/semantic.min.js"></script>
    <title>Painel de controle</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <div class="info-box">   
            <div class="title">
                <h2>Informações Gerais</h2>
            </div>
            <div class="general-informations">
                <div class="users" id="users-box">
                    <i class="huge users icon"></i>
                    <h2>Usuários Cadastrados:</h2>
                </div>

                <div class="products" id="products-box">
                    <i class="huge clipboard list icon"></i>
                    <h2>Brinquedos Cadastrados:</h2>
                </div>
            </div>
        </div>
    </main>

</body>
<script>
    fetch("http://localhost/trombinis_park/controllers/adm/find-users.php", {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        const qtdUsers = document.createElement("p");
        qtdUsers.innerText = response.length;

        const usersBox = document.getElementById("users-box");
        usersBox.appendChild(qtdUsers);
    })

    fetch("http://localhost/trombinis_park/controllers/adm/find-products.php", {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        const qtdProducts = document.createElement("p");
        qtdProducts.innerText = response.length;

        const productsBox = document.getElementById("products-box");
        productsBox.appendChild(qtdProducts);
    })
</script>
</html>
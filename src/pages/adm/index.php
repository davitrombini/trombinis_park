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
    <link rel="stylesheet" type="text/css" href="../../../../semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="../../css/home-adm.css">
    <script src="../../../../semantic/dist/semantic.min.js"></script>
    <title>Painel de controle</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <div class="general-informations">
            <div class="users">
                teste
            </div>

            <div class="products">
                teste
            </div>

            <div class="access">
                teste
            </div>
        </div>
    </main>

</body>
</html>
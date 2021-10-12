<?php 
    session_start();

    if (!isset($_SESSION["user_id"])){
        header("Location: http://localhost/trombinis_park/src/pages/user/login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="../../css/my-account.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../../../semantic/dist/semantic.min.js"></script>
    <title>Minha Conta</title>
</head>
<body>
    <main class="container">
        <div class="header">
            <i class="massive user circle outline icon"></i>
            <?php $name = $_SESSION["user_name"]; echo "<h1 style='color: white;'>$name</h1> " ?>
        </div>
        <div class="content">
            <!--<div class="email element"><?php $email = $_SESSION["user_email"]; echo " <p>$email</p> " ?></div>-->
            <div class="ui label element" style="font-size: 16px; font-weight: 600;"> <i class="mail icon"></i> <?php $email = $_SESSION["user_email"]; echo "$email" ?> </div>
            <div class="favorites element"><a href="#">Favoritos</a></div>
            <div class="config element" onclick="document.getElementById('id01').style.display='block'"><a>Informações da conta</a></div>
            <a href="../../../controllers/user/logout.php">
                <button class="negative ui right labeled icon button">
                    <i class="arrow alternate circle right outline icon"></i>
                    Sair
                </button>
            </a>
        </div>
    </main>

    <!--Modal Account Informations-->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
            <header class="w3-container w3-blue">
                <h2>Informações da conta</h2>
            </header>

            <div class="w3-section" style="padding: 10px;">
                <label for="user-name">Nome:</label><br>
                <input class="w3-input" type="text" id="user-name" name="user-name" value="<?php $name = $_SESSION["user_name"]; echo "$name" ?>" disabled required>
                <br>
                <label for="user-email">Email:</label><br>
                <input class="w3-input" type="email" name="user-email" id="user-email" value="<?php $email = $_SESSION["user_email"]; echo "$email" ?>" disabled required maxlength="255">
                <br>
                <label for="user-password">Senha:</label><br>
                <input class="w3-input" type="password" name="user-password" id="user-password" value="password" disabled required minlength="8" maxlength="255">
            </div>

            <div class="w3-center">
                <div class="w3-bar">
                    <span id="save-button" class="w3-button w3-green" style="visibility: hidden;">Salvar</span>
                    <span class="w3-button w3-blue" onclick="document.getElementById('save-button').style.visibility='visible'">Editar</span>
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-red">Cancelar</span>
                </div>
            </div>
        </div>
    </div><!--Modal-->
</body>
</html>
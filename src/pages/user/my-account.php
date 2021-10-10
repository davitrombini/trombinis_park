<?php 
    session_start();

    if (!$_SESSION["user_id"]){
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
            <div class="email element"><?php $email = $_SESSION["user_email"]; echo " <p>$email</p> " ?> <i class="edit icon"></i></div>
            <div class="favorites element"><a href="#">Favoritos</a></div>
            <div class="config element"><a href="">Informações da conta</a></div>
            <a href="../../../controllers/user/logout.php">
                <button class="negative ui right labeled icon button">
                    <i class="arrow alternate circle right outline icon"></i>
                    Sair
                </button>
            </a>
        </div>
    </main>
</body>
</html>
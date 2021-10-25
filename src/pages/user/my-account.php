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
        <div class="header" id="div-name">
            <i class="massive user circle outline icon"></i>
        </div>
        <div class="content">
            <div id="label-email" class="ui label element" style="font-size: 16px; font-weight: 600;"><i class="mail icon"></i></div>
            <div class="favorites element"><a href="#">Favoritos</a></div>
            <div class="config element" onclick="document.getElementById('id01').style.display = 'block';"><a>Informações da conta</a></div>
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
                <form id="user-informations">
                    <label for="user-name">Nome:</label><br>
                    <input class="w3-input" type="text" id="user-name" name="user-name" disabled required>
                    <br>
                    <label for="user-email">Email:</label><br>
                    <input class="w3-input" type="email" name="user-email" id="user-email" disabled required maxlength="255">
                    <br>
                    <label for="user-password">Senha:</label><br>
                    <input class="w3-input" type="password" name="user-password" id="user-password" disabled minlength="8" maxlength="255">

                    <div class="w3-center">
                        <div class="w3-bar">
                            <input type="submit" value="Salvar" id="save-button" class="w3-button w3-green" style="visibility: hidden;">
                            <span class="w3-button w3-blue" onclick="edit()">Editar</span>
                            <span onclick="cancel()" class="w3-button w3-red">Cancelar</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--Modal-->
</body>
<script>
    fetch(`http://localhost/trombinis_park/controllers/adm/find-user.php?id=${<?php $id = $_SESSION["user_id"]; echo "$id" ?>}`, {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        const labelEmail = document.getElementById("label-email");
        const userEmail = document.createElement("span");
        userEmail.innerText = response.email;
        labelEmail.appendChild(userEmail);

        const divName = document.getElementById("div-name");
        const userName = document.createElement("h1");
        userName.style.color = "white";
        userName.innerText = response.name;
        divName.appendChild(userName);

        document.getElementById("user-name").value = response.name;
        document.getElementById("user-email").value = response.email;
    })

    function edit(){
        document.getElementById("save-button").style.visibility = "visible";
        document.getElementById("user-name").disabled = false;
        document.getElementById("user-email").disabled = false;
        document.getElementById("user-password").disabled = false;
    }

    function cancel(){
        document.getElementById("id01").style.display = "none";
        document.getElementById("save-button").style.visibility = "hidden";
        document.getElementById("user-name").disabled = true;
        document.getElementById("user-email").disabled = true;
        document.getElementById("user-password").disabled = true;
    }

    document.getElementById("user-informations").addEventListener("submit", function (e){
        e.preventDefault();

        document.getElementById("id01").style.display = "none";
        document.getElementById("save-button").style.visibility = "hidden";
        document.getElementById("user-name").disabled = true;
        document.getElementById("user-email").disabled = true;
        document.getElementById("user-password").disabled = true;

        const data = {
            id: Number.parseInt(<?php $id = $_SESSION["user_id"]; echo "$id"; ?>),
            name: document.getElementById("user-name").value,
            email: document.getElementById("user-email").value,
            password: document.getElementById("user-password").value
        }

        fetch("http://localhost/trombinis_park/controllers/adm/update-user.php", {
            method: "PATCH",
            body: JSON.stringify(data)
        })
        .catch((error) => {
            alert(`${error.message}`);
        });
    })
</script>
</html>
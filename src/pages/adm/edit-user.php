<?php
    session_start();

    if ($_SESSION["user_id"] != 1){
        header("Location: http://localhost/trombinis_park/");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/edit-user.css">
    <title>Editar Usuário</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <div class="form-edit">
            <header class="form-header">
                <h2>Editar Usuário</h2>
            </header>
            
            <form id="edit-user-form">
                <label for="user-name">Nome:</label><br>
                <input type="text" name="user-name" id="user-name" maxlength="255" required><br>

                <label for="user-email">Email:</label><br>
                <input type="email" name="user-email" id="user-email" maxlength="255" required><br>

                <label for="user-password">Senha:</label><br>
                <input type="password" name="user-password" id="user-password" maxlength="255"><br>

                <div class="buttons">
                    <input type="submit" value="Salvar">
                    <a href="../adm/usuarios.php">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</body>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const userId = urlParams.get('id');
    
    fetch(`http://localhost/trombinis_park/controllers/adm/find-user.php?id=${userId}`, {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        document.getElementById("user-name").value = response.name;
        document.getElementById("user-email").value = response.email;
    })

    document.getElementById("edit-user-form").addEventListener("submit", function (e){
        e.preventDefault();

        const data = {
            id: Number.parseInt(userId),
            name: document.getElementById("user-name").value,
            email: document.getElementById("user-email").value,
            password: document.getElementById("user-password").value
        } 

        fetch("http://localhost/trombinis_park/controllers/adm/update-user.php", {
            method: "PATCH",
            redirect: "follow",
            body: JSON.stringify(data)
        })
        .then(async (response) => {
            if(response.redirected) {
                window.location.href = response.url;
            } else {
                const jsonResponse = await response.json();
                alert(jsonResponse.message);
            }
        })
        .catch((error) => {
            alert(`${error.message}`);
        });
    })
</script>
</html>
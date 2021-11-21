<?php
    session_start();

    if ($_SESSION["user_id"] != 1){
       // header("Location: http://localhost/trombinis_park/");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../src/css/usuarios-adm.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Usuários</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Ação</th>
                </tr>
            <tbody id="users-table">

            </tbody>
        </table>
    </main>
</body>
<script>
    fetch("http://localhost/trombinis_park/controllers/adm/find-users.php", {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        const usersTable = document.getElementById("users-table");

        response.forEach(user => {
            const userRow = document.createElement("tr");
            const userId = document.createElement("td");
            const userName = document.createElement("td");
            const userEmail = document.createElement("td");
            const userAdmin = document.createElement("td");

            const btnEdit = document.createElement("a");
            btnEdit.classList.add("btn-edit");

            const btnDelet = document.createElement("a");
            btnDelet.classList.add("btn-delet");

            userId.innerText = user.id;
            userName.innerText = user.name;
            userEmail.innerText = user.email;
            userAdmin.innerText = user.admin;
            btnEdit.innerText = "Editar";
            btnEdit.href = "edit-user.php?id=" + user.id;
            btnDelet.innerText = "Deletar";
            btnDelet.href = "../../../controllers/adm/process.php?delete-user=" + user.id;

            userRow.appendChild(userId);
            userRow.appendChild(userName);
            userRow.appendChild(userEmail);
            userRow.appendChild(userAdmin);
            userRow.appendChild(btnEdit);
            userRow.appendChild(btnDelet);

            usersTable.appendChild(userRow);
        });
    })
</script>
</html>
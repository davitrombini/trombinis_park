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
    <link rel="stylesheet" href="../../../src/css/brinquedos-adm.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Brinquedos</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <div class="btn-create-product">
            <a href="create-product.php">Cadastrar Brinquedo</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody id="product-table">

            </tbody>
        </table>
    </main>
</body>
<script>
    fetch("http://localhost/trombinis_park/controllers/adm/find-products.php", {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        const productTable = document.getElementById("product-table");

        response.forEach(product => {
            const productRow = document.createElement("tr");
            const productId = document.createElement("td");
            const productTitle = document.createElement("td");

            const btnEdit = document.createElement("a");
            btnEdit.classList.add("btn-edit");

            const btnDelet = document.createElement("a");
            btnDelet.classList.add("btn-delet");

            productId.innerText = product.id;
            productTitle.innerText = product.title;
            btnEdit.innerText = "Editar";
            btnEdit.href = "edit-product?id=" + product.id;
            btnDelet.innerText = "Deletar";
            btnDelet.href = "../../../controllers/adm/process.php?delete-product=" + product.id;
        
            productRow.appendChild(productId);
            productRow.appendChild(productTitle);
            productRow.appendChild(btnEdit);
            productRow.appendChild(btnDelet);

            productTable.appendChild(productRow);
        });

    })
    .catch(error => {
        alert(`${error.message}`);
    })
</script>
</html>
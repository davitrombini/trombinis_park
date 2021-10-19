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
    <link rel="stylesheet" href="../../css/create-product.css">
    <title>Cadastrar Brinquedo</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <div class="create-product-form">
            <header class="form-header">
                <h2>Cadastrar Brinquedo</h2>
            </header>
            <form id="create-product">
                <label for="product-title">Título:</label><br>
                <input type="text" name="product-title" id="product-title" maxlength="255" required><br>
                <label for="product-desc">Descrição:</label><br>
                <textarea name="product-desc" id="product-desc" maxlength="255" cols="30" rows="5" style="resize: none;" required></textarea><br>
                <label for="product-img">Link da imagem:</label><br>
                <input type="url" name="product-img" id="product-img" maxlength="255" required><br>
                <div class="btn-create">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>
</body>
<script>
    document.getElementById("create-product").addEventListener("submit", function (e){
        e.preventDefault();

        const data = {
            title: document.getElementById("product-title").value,
            desc: document.getElementById("product-desc").value,
            img: document.getElementById("product-img").value,
        };

        fetch("http://localhost/trombinis_park/controllers/adm/create-product.php", {
            method: "POST",
            redirect: "follow",
            body: JSON.stringify(data)
        })
        .then(async (response) => {
            if (response.redirected){
                window.location.href = response.url;
            } else {
                const jsonResponse = await response.json();
                alert(jsonResponse.response);
            }
        })
        .catch((error) => {
            alert(`${error.message}`);
        });
    });
</script>
</html>
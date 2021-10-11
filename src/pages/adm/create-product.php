<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Brinquedo</title>
</head>
<body>
    <form id="create-product-form">
        <label for="product-title">Título:</label><br>
        <input type="text" name="product-title" id="product-title" maxlength="255" required><br>
        <label for="product-desc">Descrição:</label><br>
        <textarea name="product-desc" id="product-desc" maxlength="255" cols="30" rows="8" style="resize: none;" required></textarea><br>
        <label for="product-img">Link da imagem:</label><br>
        <input type="url" name="product-img" id="product-img" maxlength="255" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
<script>
    document.getElementById("create-product-form").addEventListener("submit", function (e){
        e.preventDefault();

        const data = {
            title: document.getElementById("product-title").value,
            desc: document.getElementById("product-desc").value,
            img: document.getElementById("product-img").value,
        };

        fetch("http://localhost/trombinis_park/controllers/adm/create-product.php", {
            method: "POST",
            body: JSON.stringify(data),
        })
        .then((response) => response.json())
        .then((response) => alert(response.message))
        .catch((error) => {
            alert(`${error.message}`);
        });
    });
</script>
</html>
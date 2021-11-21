<?php
    session_start();

    if ($_SESSION["user_id"] != 1){
        //header("Location: http://localhost/trombinis_park/");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/edit-product.css">
    <title>Editar Brinquedo</title>
</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <div class="form-edit">
            <header class="form-header">
                <h2>Editar Brinquedo</h2>
            </header>
            
            <form id="edit-product-form" action="./controllers/adm/update-product.php">
                <label for="product-title">Título:</label><br>
                <input type="text" name="product-title" id="product-title" maxlength="255" required><br>

                <label for="product-desc">Descrição:</label><br>
                <textarea name="product-desc" id="product-desc" cols="30" rows="5" maxlength="255" required></textarea><br>

                <label for="product-img">Imagem:</label><br>
                <input type="file" name="product-img" id="product-img" maxlength="255" required><br>

                <div class="buttons">
                    <input type="submit" value="Salvar">
                    <a href="../adm/brinquedos.php">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</body>
<script>
  
</script>
</html>
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
    <link rel="stylesheet" href="../../../semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="./src/css/favoritos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Seus Favoritos</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    
    <main>
        <div id="fav-list">
            <div class="fav-header">
                <i class="huge red heart icon"></i>
                <h2>Seus Favoritos</h2>
            </div>
            <div id="products"></div>
        </div>
    </main>

    <?php include_once("footer.php"); ?>
</body>
<script>
    fetch('http://localhost/trombinis_park/controllers/user/find-favorites.php', {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        if (response.length == 0){
            const favList = document.getElementById("fav-list");
            const messageBox = document.createElement("div");
            messageBox.classList.add("message-box");
            const message = document.createElement("p");
            message.innerText = "Não há brinquedos favoritados";
            messageBox.appendChild(message);
            favList.appendChild(messageBox);
            
        } else {
            const allProductsContainer = document.getElementById("products");

            for (let i=0; i < response.length; i++){
                const productContainer = document.createElement("div");
                productContainer.classList.add("product-item");
                productContainer.classList.add("w3-display-container");

                const productImage = document.createElement("img");
                productImage.classList.add("product-image");
                productImage.classList.add("w3-round");

                const productTitle = document.createElement("h2");
                productTitle.classList.add("product-title");

                const productDescription = document.createElement("p");
                productDescription.classList.add("product-description");

                const productButton = document.createElement("a");
                productButton.classList.add("btn");
                productButton.classList.add("w3-display-hover");

                const favoriteIcon = document.createElement("i");
                favoriteIcon.classList.add("huge");
                favoriteIcon.classList.add("red");
                favoriteIcon.classList.add("heart");
                favoriteIcon.classList.add("broken");
                favoriteIcon.classList.add("icon");

                const favoriteButton = document.createElement("a");
                favoriteButton.classList.add("fav");
                favoriteButton.classList.add("w3-display-hover");
                favoriteButton.appendChild(favoriteIcon);

                productImage.src = response[i].img;
                productTitle.innerText = response[i].title;
                productDescription.innerText = response[i].description;
                productButton.innerHTML = "Ver Detalhes";
                productButton.href = "ver-detalhes.php?id=" + response[i].id;
                favoriteButton.href = "controllers/user/delete-fav.php?id=" + response[i].id;

                productContainer.appendChild(productImage);
                productContainer.appendChild(productTitle);
                productContainer.appendChild(productDescription);
                productContainer.appendChild(productButton);
                productContainer.appendChild(favoriteButton);

                allProductsContainer.appendChild(productContainer);
            }
        }
    })
    .catch(error => {
        alert(`${error.message}`);
    });

</script>

<style>    
.product-title {
    top: 20px;
}
</style>   
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/products.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./semantic/dist/semantic.min.css">
    <title>Brinquedos</title>
</head>
<body>
    <?php include_once("./header.php"); ?>

    <div id="products"></div>

    <?php include_once("./footer.php"); ?>
</body>
<script>
   fetch('http://localhost/trombinis_park/controllers/adm/find-products.php', {
      method: 'GET'
    })
    .then(response => response.json())
    .then(response => {
        const allProductsContainer = document.getElementById("products");
        
        response.forEach(product => {
            const productContainer = document.createElement("div");
            productContainer.classList.add("product-item");
            productContainer.classList.add("w3-display-container");

            const productImage = document.createElement("img");
            productImage.classList.add("product-image");
            productImage.classList.add("w3-round");
            productImage.classList.add("w3-image");

            const productTitle = document.createElement("h2");
            productTitle.classList.add("product-title");

            const productDescription = document.createElement("p");
            productDescription.classList.add("product-description");

            const productButton = document.createElement("button");
            productButton.classList.add("btn");
            productButton.classList.add("w3-display-hover");

            const favoriteIcon = document.createElement("i");
            favoriteIcon.classList.add("huge");
            favoriteIcon.classList.add("red");
            favoriteIcon.classList.add("heart");
            favoriteIcon.classList.add("outline");
            favoriteIcon.classList.add("icon");

            const favoriteButton = document.createElement("button");
            favoriteButton.classList.add("fav");
            favoriteButton.classList.add("w3-display-hover");
            favoriteButton.appendChild(favoriteIcon);

            productImage.src = product.img;
            productTitle.innerText = product.title;
            productDescription.innerText = product.description;
            productButton.innerHTML = "Ver Detalhes";

            productContainer.appendChild(productImage);
            productContainer.appendChild(productTitle);
            productContainer.appendChild(productDescription);
            productContainer.appendChild(productButton);
            productContainer.appendChild(favoriteButton);

            allProductsContainer.appendChild(productContainer);
        });
    })
    .catch(error => {
      alert(`${error.message}`);
    });
</script>
</html>
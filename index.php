<?php
include_once("./database/connection.php");
$query = "select * from products";
$result = mysqli_query($connection, $query);
$products = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include_once('./master_head.php'); ?>
<link rel="stylesheet" href="src/css/slide.css">
<link rel="stylesheet" href="src/css/products-home.css">
<link rel="stylesheet" href="src/css/most-seen-products.css">
<link rel="stylesheet" href="./semantic/dist/semantic.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

   <?php include('./header.php'); ?>
   <!-- MEIO -->

   <main>
      <!--Carrossel-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="img/slides/0.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1>Pula-Pula Aventura do Mickey</h1>
            <p>Pula-Pula + Escorregador</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="img/slides/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1>Combo Dino 3 em 1</h1>
            <p>Pula-Pula + Escorregador + Piscina de Bolinhas</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="img/slides/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1>Parque do Mickey</h1>
               <p>Pluto inflável + Escalada + Escorregador + João bobo + Pula-Pula.</p>
            </div>
         </div>
      </div>
      <button class="carousel-control-prev controls-style" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <i class="fa fa-chevron-left"></i>
      </button>
      <button class="carousel-control-next controls-style" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <i class="fa fa-chevron-right"></i>
      </button>
      </div><!--Carrossel-->
      
    
        
        

      <div class="most-seen-list" id="most-seen-list">

      </div>

      <div class="products-list" id="product-list">

      </div>

   </main>

   <!-- MEIO -->
   <?php include('./footer.php'); ?>
   
</body>
<script>
   fetch("http://localhost/trombinis_park/controllers/adm/find-most-seen-products.php", {
      method: "GET"
   })
   .then(response => response.json())
   .then(response => {
      const allMostSeenProducts = document.createElement("div");
      allMostSeenProducts.classList.add("most-seen-products");
      const mostSeenList = document.getElementById("most-seen-list");
      const seenHeader = document.createElement("div");
      seenHeader.classList.add("seen-header");
      const seenTitle = document.createElement("h2");
      seenTitle.innerText = "Mais Vistos";
      const seenIcon = document.createElement("i");
      seenIcon.classList.add("huge");
      seenIcon.classList.add("orange");
      seenIcon.classList.add("fire");
      seenIcon.classList.add("icon");
      seenHeader.appendChild(seenIcon);
      seenHeader.appendChild(seenTitle);
      mostSeenList.appendChild(seenHeader);

      for (let i=0; i < response.length; i++){
         const seenProductContainer = document.createElement("div");
         seenProductContainer.classList.add("seen-product-item");
         seenProductContainer.classList.add("w3-display-container");

         const productImage = document.createElement("img");
         productImage.classList.add("product-image");
         productImage.classList.add("w3-round");


         // click on image
         let ImageLink = "ver-detalhes.php?id=" + response[i].id;
         productImage.addEventListener('click', function() { 
            location.href = ImageLink;
          }, false);

         const productButton = document.createElement("a");
         productButton.classList.add("btn");
         productButton.classList.add("w3-display-hover");

         const favoriteIcon = document.createElement("i");
         favoriteIcon.classList.add("huge");
         favoriteIcon.classList.add("red");
         favoriteIcon.classList.add("heart");
         favoriteIcon.classList.add("outline");
         favoriteIcon.classList.add("icon");

         const favoriteButton = document.createElement("a");
         favoriteButton.classList.add("fav");
         favoriteButton.classList.add("w3-display-hover");
         favoriteButton.appendChild(favoriteIcon);

         const divBtnImg = document.createElement("div");
         divBtnImg.appendChild(favoriteButton);
         divBtnImg.appendChild(productButton);
         divBtnImg.appendChild(productImage);

         const productTitle = document.createElement("h2");
         productTitle.classList.add("product-title");

         productImage.src = response[i].img;
         productTitle.innerText = response[i].title;
         productButton.innerHTML = "Ver Detalhes";
         productButton.href = "ver-detalhes.php?id=" + response[i].id;
         favoriteButton.href = "controllers/user/criar-favorito.php?id=" + response[i].id;

         seenProductContainer.appendChild(divBtnImg);
         seenProductContainer.appendChild(productTitle);

         allMostSeenProducts.appendChild(seenProductContainer);
         mostSeenList.appendChild(allMostSeenProducts);
      }
   })


   fetch("http://localhost/trombinis_park/controllers/adm/find-products-initial-page.php", {
      method: "GET"
   })
   .then(response => response.json())
   .then(response => {
      const allProducts = document.createElement("div");
      allProducts.classList.add("products");
      const productList = document.getElementById("product-list");
      const header = document.createElement("div");
      header.classList.add("header");
      const title = document.createElement("h2");
      title.innerText = "Brinquedos";
      header.appendChild(title);
      productList.appendChild(header);

      for (let i = 0; i < response.length; i++) {
         const productContainer = document.createElement("div");
         productContainer.classList.add("product-item");
         productContainer.classList.add("w3-display-container");

         const productImage = document.createElement("img");
         productImage.classList.add("product-image");
         productImage.classList.add("w3-round");
         productImage.classList.add("w3-image");

         // click on image
         let ImageLink = "ver-detalhes.php?id=" + response[i].id;
         productImage.addEventListener('click', function() { 
            location.href = ImageLink;
          }, false);

         const productTitle = document.createElement("h2");
         productTitle.classList.add("product-title");

         const productButton = document.createElement("a");
         productButton.classList.add("btn");
         productButton.classList.add("w3-display-hover");

         const favoriteIcon = document.createElement("i");
         favoriteIcon.classList.add("huge");
         favoriteIcon.classList.add("red");
         favoriteIcon.classList.add("heart");
         favoriteIcon.classList.add("outline");
         favoriteIcon.classList.add("icon");

         const favoriteButton = document.createElement("a");
         favoriteButton.classList.add("fav");
         favoriteButton.classList.add("w3-display-hover");
         favoriteButton.appendChild(favoriteIcon);

         productImage.src = response[i].img;
         productTitle.innerText = response[i].title;
         productButton.innerHTML = "Ver Detalhes";
         productButton.href = "ver-detalhes.php?id=" + response[i].id;
         favoriteButton.href = "controllers/user/criar-favorito.php?id=" + response[i].id;

         productContainer.appendChild(productImage);
         productContainer.appendChild(productTitle);
         productContainer.appendChild(productButton);
         productContainer.appendChild(favoriteButton);

         allProducts.appendChild(productContainer);
         productList.appendChild(allProducts);
      }

      const textVerTodos = document.createElement("h2");
      textVerTodos.innerText = "Ver todos";
      const seta = document.createElement("i");
      seta.classList.add("big");
      seta.classList.add("arrow");
      seta.classList.add("right");
      seta.classList.add("icon");
      const link = document.createElement("a");
      link.appendChild(textVerTodos);
      link.appendChild(seta);

      link.href = "brinquedos.php";

      const productContainer = document.createElement("div");
      productContainer.classList.add("product-item");

      productContainer.appendChild(link);

      allProducts.appendChild(productContainer);
      productList.appendChild(allProducts);

   })
   .catch(error => {
      alert(`${error.message}`);
   });
</script>
</html>


<!DOCTYPE html>
<html lang="pt-br">

<?php include_once('./master_head.php'); ?>

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
            <h5>Brinquedo 1</h5>
            <p>Descrição</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="img/slides/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="img/slides/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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

   </main>

   <!-- MEIO -->
   <?php include('./footer.php'); ?>
   
</body>

</html>


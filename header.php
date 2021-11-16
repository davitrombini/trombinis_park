<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/header.css">
</head>

<body>
  <header id="header" role="heading">
    <nav>
        <h1 class="logo"><img src="img/logo/logo 1.png" alt="Trombini's Park"></h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="brinquedos.php">Brinquedos</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="./src/pages/user/my-account.php">Minha Conta</a></li>            
        </ul>
        <div class="nav__icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <!--/Nav-->
  </header>
  <!--/Header-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function () {
      $(".nav__icon").on("click", function () {
        $(this).toggleClass("active");
        $("nav ul").slideToggle();
      });

      $(window).on("load resize", function () {
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        var mobileLimit = 700;
        if (windowWidth >= mobileLimit) {
          $("nav ul").css({ display: "flex", height: "auto" });
        } else {
          $("nav ul").css({ display: "none", height: windowHeight + "px" });
        }
      });
    });

  </script>
</body>
</html>
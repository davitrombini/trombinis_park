<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/header.css">
  <link rel="stylesheet" href="src/css/slide.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header id="header" role="heading">
    <nav>
        <h1 class="logo">Trombini's Park</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Brinquedos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Minha Conta</a></li>            
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
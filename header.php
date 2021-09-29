<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/header.css">
</head>
<body>
  <header id="header" role="heading">
    <nav>
        <h1 class="logo">Trombini's Park</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Brinquedos</a></li>
            <li><a href="#">Sobre</a></li>

            <!-- <li><a href="#">Minha Conta</a></li> -->
            <!-- Menu Dropdown -->
            <div class="box-login">
              
              <li><a href="#">Minha Conta</a></li>

              <div class="arrow-up"></div>

              <div class="login-form">
                <div class="center">
                  <form method="post">
                    <div class="txt_field">
                      <input type="text" required>
                      <span></span>
                      <label>Username</label>
                    </div>
                    <div class="txt_field">
                      <input type="password" required>
                      <span></span>
                      <label>Password</label>
                    </div>
                    <div class="pass">Esqueceu a Senha?</div>
                    <input type="submit" value="Login">
                    <div class="signup_link">
                      Não é um membro? <a href="#">Registre-se</a>
                    </div>
                  </form>
                </div>
              </div>

          </div> <!-- Fim Menu Dropdown -->

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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      border: 0;
      box-sizing: border-box;
    }

    header {
        background-image: linear-gradient(to bottom, #c435dd, #e040fb);
        width: 100%;
    }

    a {
        background: transparent;
        margin: 0;
        padding: 0;
        font-size: 100%;
        vertical-align: baseline;
        text-decoration: none;
    }

    nav {
        max-width: 1180px;
        height: 80px;
        margin: 0px auto;
        display: -webkit-flex;
        display: flex;
        -ms-align-items: center;
        align-items: center;
    }

    h1 {
        color: #fff;
        margin-left: 10px;
        margin-right: auto;
        font-size: 24px;
        font-family: Arial, Helvetica, sans-serif;
    }

    ul {
        display: -webkit-flex;
        display: flex;
        list-style: none;
    }

    ul li a {
        color: #fff;
        margin: 0px 10px;
        padding: 10px;
        border-radius: 5px;
        font-size: 20px;
        font-weight: 500;
        letter-spacing: 1px;
    }

    ul li a:hover {
        color: #d500f9;
        background :#fbf0fd;
        transition: 0.2s ease-in;
    }

    .nav__icon,
    .nav__icon span {
        display: none;
    }

    .nav__icon {
        width: 36px;
        height: 28px;
        margin-right: 10px;
        position: relative;
        cursor: pointer;
    }

    .nav__icon span {
        background: rgba(255, 255, 255, 1);
        position: absolute;
        left: 0;
        width: 100%;
        height: 4px;
        border-radius: 4px;
    }

    .nav__icon span:nth-of-type(1) {
        top: 0;
    }

    .nav__icon span:nth-of-type(2) {
        top: 12px;
    }

    .nav__icon span:nth-of-type(3) {
        bottom: 0;
    }

    .nav__icon.active span:nth-of-type(1) {
        -webkit-transform: translateY(12px) rotate(-45deg);
        transform: translateY(12px) rotate(-45deg);
    }

    .nav__icon.active span:nth-of-type(2) {
        display: none;
    }

    .nav__icon.active span:nth-of-type(3) {
        -webkit-transform: translateY(-12px) rotate(45deg);
        transform: translateY(-12px) rotate(45deg);
    }

    @media only screen and (max-width: 700px) {
        header {
            position: relative;
            z-index: 999;
        }
        h1 {
            margin: 0 auto;
        }
        ul {
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: center;
            justify-content: center;
            background: rgba(0, 0, 0, .8);
            position: absolute;
            top: 80px;
            left: 0px;
            width: 100%;
            z-index: 980;
        }
        ul li {
            padding: 10px;
            text-align: center;
        }
        ul li a {
            display: block;
            background: transparent;
            margin: 0px;
            padding: 20px;
        }
        ul li a:hover {
            background: none;
            color: #e040fb;
        }
        .nav__icon,
        .nav__icon span {
            display: inline-block;
            transition: all .4s;
            box-sizing: border-box;
            z-index: 999;
        }
    }
  </style>
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
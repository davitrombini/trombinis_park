<?php
    include_once("./database/connection.php");

    session_start();

    if (isset($_GET["id"])){
        $id = $_GET["id"];
        $view = "view".$id;
    } if (!isset($_SESSION[$view])) {
        $_SESSION[$view] = 1;
        $query = "update products set views = views + 1 where id = $id";
        mysqli_query($connection, $query);
        mysqli_close($connection);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/ver-detalhes.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./semantic/dist/semantic.min.css">
    <script src="./semantic/dist/semantic.min.js"></script>
</head>
<body>
    <?php include_once("header.php"); ?>

    <main>
        <div class="product">
            <div class="informations">
                <div class="img">
                    <img class="w3-round w3-image" id="img" src="">
                </div>

                <div class="title-contact">
                    <div class="title">
                        <h1 id="title"></h1>
                    </div>

                    <div class="desc">
                        <h2>Descrição:</h2>
                        <p id="desc"></p>
                    </div>

                    <div class="contact">
                        <h2>Contato:</h2>
                        <a href="https://pt-br.facebook.com/trombinispark/" target="_blank">
                            <button class="ui facebook button">
                            <i class="facebook icon"></i>
                            Facebook
                            </button>
                        </a>
                        <a href="https://www.instagram.com/trombinis_park/" target="_blank">
                            <button class="ui instagram button">
                                <i class="instagram icon"></i>
                                Instagram
                            </button>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=5514988156384" target="_blank">
                            <button class="ui whatsapp button">
                                <i class="whatsapp icon"></i>
                                WhatsApp
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get("id");

    fetch(`http://localhost/trombinis_park/controllers/adm/find-product.php?id=${productId}`, {
        method: "GET"
    })
    .then(response => response.json())
    .then(response => {
        document.getElementById("img").src = response.img;
        document.getElementById("title").innerText = response.title;
        document.getElementById("desc").innerText = response.description;
        document.title = response.title;
    })
</script>
</html>
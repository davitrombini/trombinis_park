<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="./src/css/footer.css">
    <link rel="stylesheet" href="./semantic/dist/semantic.min.css">
    <script src="./semantic/dist/semantic.min.js"></script>
</head>
<body>

    <footer>

        <div class="element endereco">
            <h2>Endereço</h2>
            <p><address> Ubaldo Damiano, 270 | Jaú/SP - CEP: 17204281</address></p>
        </div><!--

     --><div class="element contatos">
            <h2>Contatos</h2>
            <div class="ui horizontal list">
                <div class="item"><a href="https://pt-br.facebook.com/trombinispark/" target="_blank"><i class="huge blue facebook square icon"></i></a></div>
                <div class="item"><a href="https://api.whatsapp.com/send?phone=5514988156384" target="_blank"><i class="huge green whatsapp circle icon"></i></a></div>
                <div class="item"><a href="https://www.instagram.com/trombinis_park/" target="_blank"><i class="huge black instagram circle icon"></i></a></div>
            </div>
        </div><!--

     --><div class="element sobre">
            <h2>Sobre</h2>
            <p>A Trombini's Park é uma empresa que aluga brinquedos para festas infantis. <br>
            <?= date("Y"). " - © Todos os direitos reservados.";?></p>
        </div>

    </footer>

</body>
</html>
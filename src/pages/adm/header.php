<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            text-decoration: none !important;
            list-style: none;
        }
        header{
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        h1{
            font-weight: 600;
        }
        .pages{
            font-size: 16px;
            font-weight: 400;
        }
        ul li{
            display: inline;
            padding: 30px;
            margin-right: 15px;
            transition: all .3s ease-in;
            border-radius: 10px;
        }
        ul li:hover{
            background: #fff;
            color: rgba(0, 0, 0, 0.7);
            cursor: pointer;
        }
        header, ul li{
            color: #fff;
        }
    </style>
</head>
<body class="all">
    <header>
        <h1>Painel de Controle</h1>
        <nav>
            <ul class="pages">
                <a href="index.php"><li>Home</li></a>
                <a href="usuarios.php"><li>Usuários</li></a>
                <a href="brinquedos.php"><li>Brinquedos</li></a>
            </ul>
        </nav>
    </header>
</body>
</html>
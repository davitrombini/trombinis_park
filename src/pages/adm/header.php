<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            text-decoration: none;
            list-style: none;
            color: #fff;
        }
        header{
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .pages{
            font-size: 16px;
            font-weight: 600;
        }
        ul li{
            display: inline;
            padding: 30px;
            margin-right: 15px;
            transition: all .3s ease-in;
        }
        ul li:hover{
            background: #fff;
            color: rgba(0, 0, 0, 0.7);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Painel de Controle</h1>
        <ul class="pages">
            <a href="index.php"><li>Home</li></a>
            <a href=""><li>Usuários</li></a>
            <a href=""><li>Brinquedos</li></a>
        </ul>
    </header>
</body>
</html>
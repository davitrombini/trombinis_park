<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header a{
            color: #fff;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }
        header a:hover{
            color: #00e5ff;
            background: #d500f9;
        }
        #logo{
            font-size: 2rem;
            background: none;
        }
        #header{
            box-sizing: border-box;
            height: 70px;
            padding: 1rem;
            display: flex;
            background: #e040fb;
            align-items: center;
            justify-content: space-between;
        }
        #menu{
            display: flex;
            list-style: none;
            gap: .5rem;
            font-size: 1rem;
        }
        #menu a{
            display: block;
            padding: .5rem;
        }
    </style>
</head>
<body>
    <header id="header">
        <a id="logo" href="">Trombini's Park</a>
        <nav id="nav">
            <ul id="menu">
                <li><a href="">Home</a></li>
                <li><a href="">Brinquedos</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Minha Conta</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
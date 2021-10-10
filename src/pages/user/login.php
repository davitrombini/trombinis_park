<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Fazer login</title>
</head>
<body>
    <main class="container">
        <h2>Faça seu login</h2>
        <form id="login-form">
            <div class="input-field">
                <input type="text" name="email" id="user-email" maxlength="255" placeholder="Insira seu email" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="user-password" maxlength="255" placeholder="Insira sua senha" required>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
        </form>

        <div class="footer">
            <span>Esqueceu a senha? <a href="forget-password.php">Clique aqui</a></span>
            <span>Não tem uma conta? <a href="create-user.php">Cadastre-se aqui</a></span>
        </div>
    </main>
</body>
<script>
    document.getElementById("login-form").addEventListener("submit", function (e){
        e.preventDefault();

        const data = {
            email: document.getElementById("user-email").value,
            password: document.getElementById("user-password").value,
        };

        fetch('http://localhost/trombinis_park/controllers/user/login.php', {
            method: 'POST',
            redirect: "follow",
            body: JSON.stringify(data),
        })
        .then(async (response) => {
            if(response.redirected) {
                window.location.href = response.url;
            } else {
                const jsonResponse = await response.json();
                alert(jsonResponse.message);
            }
        })
        .catch((error) => {
            alert(`${error.message}`);
        });
    });
</script>
</html>
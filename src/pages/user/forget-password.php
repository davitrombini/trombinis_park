<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/forget-password.css">
    <title>Esqueceu a senha</title>
</head>
<body>
    <main class="container">
        <h2>Esqueceu a senha</h2>
        <form id="forget-password-form">
            <div class="input-field">
                <input type="text" name="email" id="user-email" maxlength="255" placeholder="Insira seu email" required>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
<script>
    document.getElementById("forget-password-form").addEventListener("submit", function(e){
        e.preventDefault();

        email = document.getElementById("user-email").value;

        fetch("http://localhost/trombinis_park/controllers/user/forget-password.php", {
            method: "POST",
            redirect: "follow",
            body: JSON.stringify(email),
        })
    });
</script>
</html>
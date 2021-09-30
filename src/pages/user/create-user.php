<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/create-user.css">
  <title>Criar conta</title>
  <?php include ('C:/xampp/htdocs/trombinis_park/master_head.php'); ?>
</head>
<body>
  <form class="ui form" id="create-user-form">
    <div class="required field">
      <input type="text" name="name" maxlength="255" id="input-user-name" placeholder="Nome">
    </div>

    <div class="required field">
      <input type="email" name="email" maxlength="255" id="input-user-email" placeholder="Email">
    </div>

    <div class="required field">
      <input type="password" name="password" maxlength="255" id="input-user-password" placeholder="Senha">
    </div>

    <input class="ui submit button" type="submit" value="Cadastrar">
  </form>
  <p id="result"></p>
</body>

<script>
  document.getElementById("create-user-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const data = {
      name: document.getElementById("input-user-name").value,
      email: document.getElementById("input-user-email").value,
      password: document.getElementById("input-user-password").value,
    };

    fetch('http://localhost/trombinis_park/controllers/user/create-user.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(response => {
      document.getElementById("result").innerText = `${response.message}`;
    })
    .catch((error) => {
      document.getElementById("result").innerText = `${error.message}`;
    });
  });
  
</script>

</html>
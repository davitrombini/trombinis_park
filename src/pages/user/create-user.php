<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/create-user.css">
  <title>Criar conta</title>
  <link rel="stylesheet" type="text/css" href="../../../semantic/dist/semantic.min.css">
  <script src="../../../semantic/dist/semantic.min.js"></script>
  <script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
  <style>
    body{
      background-image: linear-gradient(to bottom, #C36EE0, #ae35d9);
    }
  </style>
</head>
<body>
  <div class="ui centered grid container">
    <div class="row" style="margin-top: 10%;">
      <div class="eleven wide column">
        <form class="ui form" id="create-user-form">
          <div class="ui segment" style="border: 1px solid #1b7ff2;">
            <div class="row">
              <div class="column">
                <div class="ui centered header">
                  <h1 style="color: #ae35d9;">Crie sua conta</h1>
                </div>
              </div>
            </div>
            <div class="required field">
              <label for="input-user-name" style="text-align: left; color: #ae35d9;">Nome</label>
              <div class="ui left icon input">
                <i class="user icon"></i>
                <input type="text" name="name" maxlength="255" id="input-user-name" placeholder="Insira seu nome" required>
              </div>
            </div>
            <div class="required field">
              <label for="input-user-email" style="text-align: left; color: #ae35d9;">Email</label>
              <div class="ui left icon input">
                <i class="envelope icon"></i>
                <input type="email" name="email" maxlength="255" id="input-user-email" placeholder="email@exemplo.com" required>
              </div>
            </div>
            <div class="required field">
              <label for="input-user-password" style="text-align: left; color: #ae35d9;">Senha</label>
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" minlength="8" maxlength="255" id="input-user-password" placeholder="Insira sua senha" required>
              </div>
            </div>
            <div class="column" style="text-align: center;">
              <button class="ui large right labeled icon submit button" style="background-color: #ae35d9; color: #fff;">
                Cadastrar
                <i class="right arrow icon"></i>
              </button>
            </div>
          </div>
        </form>
        <div class="ui error message" id="error message" style="display: none;"></div>
        <div class="ui success message" id="success message" style="display: none;"></div>
        <p id="result"></p>
      </div>
    </div>
  </div>
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
      document.getElementById("success message").style.display = "block";
      document.getElementById("success message").innerText = `${response.message}`;
    })
    .catch((error) => {
      document.getElementById("error message").style.display = "block";
      document.getElementById("error message").innerText = `${error.message}`;
    });

  });
  
</script>
</html>


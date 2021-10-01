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
  <script>

    $('.ui.form').form({
      fields: {
        name: {
          rules: [{
            type: 'empty',
            Prompt: 'Por favor, insira seu nome'
          }]
        },
        email: {
          rules: [{
            type: 'empty',
            Prompt: 'Por favor, insira seu e-mail'
          }]
        }
      }
    });

  </script>
</head>
<body>
  <div class="ui middle aligned center aligned grid container" style="position: relative; top: 15%">
    <div class="column" style="width: 60%">
      <h1 class="ui pink header">
        <div class="content">
          Crie sua conta
        </div>
      </h1>
      <form class="ui centered form" id="create-user-form">
        <div class="ui stacked segment" style="margin-top: 30px;">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="name" maxlength="255" id="input-user-name" placeholder="Nome">
            </div>
          </div>
          
          <div class="field">
            <div class="ui left icon input">
              <i class="envelope icon"></i>
              <input type="email" name="email" maxlength="255" id="input-user-email" placeholder="Email">
            </div>
          </div>

           <div class="field">
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" maxlength="255" id="input-user-password" placeholder="Senha">
            </div>
          </div>

          <button class="ui centered large pink right labeled icon submit button">
            <i class="right arrow icon"></i>
            Cadastrar
          </button>
        </div>
        <div class="ui error message"></div>
        <p id="result"></p>
      </form>
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
      document.getElementById("result").innerText = `${response.message}`;
    })
    .catch((error) => {
      document.getElementById("result").innerText = `${error.message}`;
    });
  });
  
</script>
</html>


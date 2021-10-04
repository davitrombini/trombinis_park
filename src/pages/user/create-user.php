<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../../semantic/dist/semantic.min.css">
  <link rel="stylesheet" href="../../css/create-user.css">
  <title>Criar conta</title>
  
</head>
<body>
  
  <main>
    <h1>Crie sua conta</h1>
    <form id="create-user-form">
      <label for="input-user-name">
        <span>Nome</span>
        <div class="ui left icon input">
          <input type="text" name="name" id="input-user-name" maxlength="255" placeholder="Insira seu nome" required>
          <i class="user icon"></i>
        </div>
      </label>
      
      <label for="input-user-email">
        <span>Email</span>
        <div class="ui left icon input">
          <input type="email" name="email" id="input-user-email" maxlength="255" placeholder="email@exemplo.com" required>
          <i class="envelope icon"></i>
        </div>
      </label>

      <label for="input-user-password">
        <span>Senha</span>
        <div class="ui left icon input">
          <input type="password" name="password" id="input-user-password" maxlength="255" minlength="8" placeholder="Insira uma senha" required>
          <i class="lock icon"></i>
        </div>
      </label>

      <input type="submit" value="Cadastrar">
    </form>
  </main>
  <section class="images">
    <img src="../../assets/mobile.svg" alt="">
    <div class="circle"></div>
  </section>

  <div class="ui error message" id="error message" style="display: none;"></div>
  <div class="ui success message" id="success message" style="display: none;"></div>
  <!--<p id="result"></p>-->
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


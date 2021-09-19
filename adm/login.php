
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once('./master_head_adm.php'); ?>

<style>
      body{
        background-color: #EEEEEE;
      }
</style>

<script>
		$(function () {

			$("#form-login").submit(function(e) {

				e.preventDefault(); 

				var form = $(this);
				var url = "src_login.php";

				$.ajax({
							type: "POST",
							url: url,
							data: form.serialize(), 
							success: function(data){
								
								//debug
								//console.log(data);

								// caso tenha voltado como 0, o user não foi encontrado
								// então alertar que isso ocorreu.
								if(data == false){
									showModal("Email/senha inválidos - por favor confira!!!");
								}
							}
						});


				});


		});
</script>
	<body>

		<section class="login">

			<div class="ui grid">

				<div class="five wide column"> </div>

				<div class="six wide column">

					<form class="ui mini form" method="POST" action="" id="form-login">

						<div class="field">
							<label for="email">Email:</label>
							<div class="ui left icon input"> <i class="at icon"></i>
								<input type="email" placeholder="Insira seu email" name="email"> </div>
						</div>

						<div class="field">
							<label for="email">Senha:</label>
							<div class="ui left icon input"> <i class="lock icon"></i>
								<input type="password" placeholder="Insira sua senha" name="senha"> </div>
						</div>

						<button class="ui blue icon button" id="enviar">
              <i class="arrow alternate circle right icon"></i>
              Login
            </button>

					</form>

				</div>

				<div class="five wide column"></div>

			</div>

		</section>

	</body>

</html>
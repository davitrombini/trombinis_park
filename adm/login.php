<!-- página de exemplo de estrutura a ser seguida -->
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once('./src_head_adm.php'); ?>

<style>
      body{
        background-color: #EEEEEE;
      }
</style>  
	<body>

		<section class="login">

			<div class="ui grid">

				<div class="five wide column"> </div>

				<div class="six wide column">

					<form class="ui mini form" method="POST" action="./src_login.php">

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

						<button class="ui blue icon button">
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
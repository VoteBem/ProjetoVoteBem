<?PHP

  $senha = 0;
  @$senha = $_GET['senha'];

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Cadastro</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body>
		<main>
			<nav>
				<div class="nav-wrapper blue">
					<a href="index.html" class="brand-logo"><img src="imgs/nav-logo.png" title="Vote bem" alt="Vote Bem"></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="sobre.html">Sobre o Movimento</a></li>
						<li><a href="agenda.php">Agenda</a></li>
						<li><a href="login.php" class="waves-effect waves-light btn blue lighten-2" href="login.html">Login</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="sobre.html">Sobre o Movimento</a></li>
						<li><a href="agenda.php">Agenda</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</nav>	
			<nav class="hide-on-small-only">
				<div class="nav-wrapper blue espacamento-lateral">
					<div class="col s12">
						<a href="index.html" class="breadcrumb">Home</a>
						<a href="login.php" class="breadcrumb">Login</a>
						<a href="cadastro.php" class="breadcrumb">Cadastro</a>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
					  <h3 class="center">Cadastro de usuário</h3>
					</div>
				</div>
				<div class="row">
                    <form method="POST" action="PaginasProcessamento/RecebeCadastro.php" class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="first_name" autofocus required name="nomecompleto" type="text" class="validate">
                                <label for="first_name">Nome Completo</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="nascimento campoData" required name="nascimento" type="text" class="validate" data-mask="00/00/0000" max-length=8 required>
                                <label for="first_name">Data de nascimento</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="email" required type="email" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <select name="sexo" required id="seleciona" required>
                                    <option value="" disabled selected>Escolha seu sexo</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                              </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="password" required type="password" name="senha" class="validate">
                                <label for="password">Senha</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="password" required type="password" name="confirmar_senha" class="validate">
                                <label for="password">Confirmar Senha</label>
                            </div>

                            <div class="row">
                                <div class="col s12 center">
                                    <button class="btn waves-effect waves-light" type="submit" name="enviar" >Enviar 
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</main>	
		<footer class="page-footer blue">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<p><img src="imgs/footer-logo.png"></p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Compartilhe</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					2017 Copyright - Todos os direitos reservados
				</div>
			</div>
		</footer>
        <?PHP
        if($senha =="invalido"){
        echo "<script type='text/javascript'>window.onload = function(){
              Materialize.toast('Senhas incoretas', 5000);
            }
          </script>";
          }
        ?>
		<!-- mascara-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jQueryMaskPlugin/dist/jquery.mask.min.js"></script>
		<!-- outros -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>
<di
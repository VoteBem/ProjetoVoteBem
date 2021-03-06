<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Menu do Quiz</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="../css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body>
	<style>
	<?PHP

	  $cad = 0;
	  @$cad = $_GET['cadastro'];

	?>
	.card-image{
		height:150px;
	}
	.container{
		margin-button:80px;
	}
	.card{
		background:#fafafa;
	}
	
	</style>
		<main>
			<nav>
				<div class="nav-wrapper blue">
					<a href="../index.html" class="brand-logo"><img src="../imgs/nav-logo.png" title="Vote bem" alt="Vote Bem"></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="painel.php">Painel de Controle</a></li>
						<li><a href="../galeria.html">Galeria</a></li>
						<li><a href="../sobre.html">Sobre o Movimento</a></li>
						<li><a href="../agenda.php">Agenda</a></li>
						<li><a href="../login.php" class="waves-effect waves-light btn blue lighten-2">Login</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="painel.php">Painel de Controle</a></li>
						<li><a href="../galeria.html">Galeria</a></li>
						<li><a href="../sobre.html">Sobre o Movimento</a></li>
						<li><a href="../agenda.php">Agenda</a></li>
						<li><a href="../login.php">Login</a></li>
					</ul>
				</div>
			</nav>
			<nav>
				<div class="nav-wrapper blue espacamento-lateral">
					<div class="col s12">
						<a href="../index.html" class="breadcrumb">Home</a>
						<a href="painel.php" class="breadcrumb">Painel de Controle</a>
						<a href="menu_quiz.php" class="breadcrumb">Menu do Quiz</a>
					</div>
				</div>
			</nav>				
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h2 class="center">Selecione uma opção:</h2>
					</div>	
				</div>
				<div class="row">
					<div class="col s12 m4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/user4.png" height="150px">
							</div>
							<div class="card-action center">
								<a href="Novapergunta.php" class="blue-text">Adicionar Nova Pergunta</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- FIM DOS BLOCOS -->	
		</main>
		<footer class="page-footer blue">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<p><img src="../imgs/footer-logo.png"></p>
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
					© 2017 Copyright - Todos os direitos reservados
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript" src="../js/custom.js"></script>
		<?PHP
            if($cad =="ok"){
				echo "<script type='text/javascript'>window.onload = function(){
				Materialize.toast('Concluído com sucesso', 5000);
				}
				</script>";
			}
        ?>
	</body>
</html>
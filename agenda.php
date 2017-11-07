<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Agenda de Eventos</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<?php
		if(isset($_POST['periodo'])){
				$dataInicial = $_POST['dataInicial'];
				$dataFinal   = $_POST['dataFinal'];
				$order = "WHERE data BETWEEN '$dataInicial' AND '$dataFinal'";
		}else{
			$order = "";
		}
	?>
	<?php
		
		$sql = "SELECT * FROM eventos $order";
		include "conexao.php";
		$vb = $banco -> prepare($sql);
		$vb -> execute();

	?>
	<style>
		.img{
			padding-top:3%;
		}
		.botao{
			margin:0 auto;
		}
	</style>
	<body>
		<main>
			<nav>
				<div class="nav-wrapper blue">
					<a href="index.html" class="brand-logo">ㅤVote Bem</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="sobre.html">Sobre o Movimento</a></li>
						<li><a href="agenda.html">Agenda</a></li>
						<li><a href="login.php" class="waves-effect waves-light btn blue lighten-2" href="login.html">Login</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="sobre.html">Sobre o Movimento</a></li>
						<li><a href="agenda.html">Agenda</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</nav>
				<nav>
					<div class="nav-wrapper blue espacamento-lateral">
						<div class="col s12">
							<a href="index.html" class="breadcrumb">Inicial</a>
							<a href="agenda.html" class="breadcrumb">Agenda</a>
						</div>
					</div>
				</nav>
			<div class='container'>
				<h1 class='center'>Agenda de Eventos</h1><br><br>
				<form method="POST" action="" class="col s12">
				<div class="row">
					<p><h5>Selecione um período:</h5></p>
					<div class="input-field col s12 m6">
						<i class="material-icons prefix">event_note</i>
						<input id="de" name="dataInicial" type="date" required class="validate">
					</div>
					<div class="input-field col s12 m6">
						<i class="material-icons prefix">event_note</i>
						<input id="ate" name="dataFinal" type="date" required class="validate">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l12 center">
						<button class="btn waves-effect waves-light blue botao" type="submit" name="periodo">Conferir
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
				<br><br>
			</form>
			<?php
				foreach($vb as $agenda){
					$id           = $agenda['id_evento'];
					$nome         = $agenda["nome"];
					$imagem       = $agenda["imagem"];
					$descricao    = $agenda["descricao"];
					$ingresso     = $agenda["ingresso"];
					$data         = $agenda["data"];
					$horario      = $agenda["horario"];
					$local        = $agenda["local"];
					
					echo "<div class='row'>
					<div class='col s12 m6 center'>
					 <img class='img' src='imgs/candidatos/candidatos-1.png'>
					</div> 
						<div class='col s12 m6'><a name='ev1'></a>
							<h5>Nome:$nome </h5>
							<h5>Descrição:$descricao</h5>
							<h5>Ingresso:$ingresso</h5>
							<h5>Data:$data</h5>
							<h5>Horário:$horario</h5>
							<h5>Local:$local</h5>
						</div>
				</div><hr>";
				}
			?>
			</div>
				<!-- FIM DOS BLOCOS -->		
		</main>
		<footer class="page-footer blue">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<p><a href="index"><img src="imgs/footer-logo.png"></a></p>
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
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>
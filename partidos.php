<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Partidos</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<?php
		$sql = "SELECT * FROM tb_partidos";
		include "PaginasProcessamento/conexao.php";
		$vb = $banco -> prepare($sql);
		$vb -> execute();
	?>
	<style>
		.img{
			padding-top:3%;
		}
	</style>
	<body>
		<main>
			<nav>
				<div class="nav-wrapper blue">
					<a href="index.html" class="brand-logo"><img src="imgs/nav-logo.png" title="Vote bem" alt="Vote Bem"></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="PagsControle/painel.php">Painel de Controle</a></li>
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="sobre.html">Sobre o Movimento</a></li>
						<li><a href="agenda.html">Agenda</a></li>
						<li><a href="login.php" class="waves-effect waves-light btn blue lighten-2" href="login.html">Login</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="PagsControle/painel.php">Painel de Controle</a></li>
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="sobre.html">Sobre o Movimento</a></li>
						<li><a href="agenda.html">Agenda</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</nav>
				<nav class="hide-on-small-only">
					<div class="nav-wrapper blue espacamento-lateral">
						<div class="col s12">
							<a href="index.html" class="breadcrumb">Home</a>
							<a href="index_cand_part.html" class="breadcrumb">Candidatos e Partidos</a>
							<a href="partidos.html" class="breadcrumb">Partidos</a>
						</div>
					</div>
				</nav>	
			<div class='container'>
				<h1 class='center'>Partidos</h1><br><br>
			<?php
				foreach($vb as $partidos){
					$id                 = $partidos['id_partido'];
					$nome               = $partidos["nome"];
					$sigla              = $partidos["sigla"];
					$ano_fundacao       = $partidos["ano_fundacao"];
					$ideais             = $partidos["ideais"];
					$imagem             = $partidos["imagem"];
					
					echo "<div class='row'>
					<div class='col s12 m6 center'>
					 <img class='img' src='imgs/partidos/$imagem'>
					</div> 
						<div class='col s12 m6'>
							<h5>Nome:$nome</h5>
							<h5>Sigla:$sigla</h5>
							<h5>Ano de Fundação:$ano_fundacao</h5>
							<h5>Ideais:$ideais</h5>
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
					© 2017 Copyright - Todos os direitos reservados
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>
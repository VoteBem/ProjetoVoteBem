﻿<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Quiz</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="../css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<?php
		$sql = "SELECT * FROM tb_quiz";
		include "../PaginasProcessamento/conexao.php";
		$vb = $banco -> prepare($sql);
		$vb -> execute();
	?>
	<body>
		<main>
			<nav>
				<div class="nav-wrapper blue">
					<a href="../index.html" class="brand-logo"><img src="../imgs/nav-logo.png" title="Vote bem" alt="Vote Bem"></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="../PagsControle/painel.php">Painel de Controle</a></li>
						<li><a href="../galeria.html">Galeria</a></li>
						<li><a href="../sobre.html">Sobre o Movimento</a></li>
						<li><a href="../agenda.php">Agenda</a></li>
						<li><a href="../login.php" class="waves-effect waves-light btn blue lighten-2" href="login.html">Login</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="../PagsControle/painel.php">Painel de Controle</a></li>
						<li><a href="../galeria.html">Galeria</a></li>
						<li><a href="../sobre.html">Sobre o Movimento</a></li>
						<li><a href="../agenda.php">Agenda</a></li>
						<li><a href="../login.php">Login</a></li>
					</ul>
				</div>
			</nav>
			<nav class="hide-on-small-only">
				<div class="nav-wrapper blue espacamento-lateral">
					<div class="col s12">
						<a href="../index.html" class="breadcrumb">Home</a>
						<a href="quiz_perguntas.php" class="breadcrumb">Quiz - Perguntas</a>
					</div>
				</div>
			</nav>	
			<div class='container'>
				<h1 class='center'>Quiz</h1>
				<h5>Analise cada questão e selecione a resposta que achar mais adequeda</h5><br>
			<?php
				$cont = 1;
				foreach($vb as $quiz){
				    
					$pergunta       = $quiz["pergunta"];
					$resposta1      = $quiz["resposta1"];
					$resposta2      = $quiz["resposta2"];
					$resposta3      = $quiz["resposta3"];
					$resposta4      = $quiz["resposta4"];
					$resposta5      = $quiz["resposta5"];
					
					echo "<div class='row  grey lighten-3'>
							<div class='col s12 m6'><a name='pedro'></a>
								<form method='POST' action=''>
									<p>
										<h5>Questão $cont</h5>
									</p>
									<p>
										<h6>$pergunta</h6>
									</p>
									<p>
										<input name='group1' type='radio' id='test1'/>
										<label for='test1'>$resposta1</label>
									</p>
									<p>
										<input name='group1' type='radio' id='test2'/>
										<label for='test2'>$resposta2</label>
									</p>
									<p>
										<input name='group1' type='radio' id='test3'/>
										<label for='test3'>$resposta3</label>
									</p>
									<p>
										<input name='group1' type='radio' id='test4'/>
										<label for='test4'>$resposta4</label>
									</p>
									<p>
										<input name='group1' type='radio' id='test5'/>
										<label for='test5'>$resposta5</label>
									</p>
								</form>
							</div>
						</div>";
						$cont++;
				}
			?>
			<h5>Para conferir o resultado, clique no botão abaixo!</h5><br>
			<div class="col s12 center">
				<button class="btn waves-effect waves-light blue" type="submit" name="action">Conferir
					<i class="material-icons right">send</i>
				</button>
			</div>
			</div><br>
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
	</body>
</html>
<?php
		@$id   = $_GET['id'];
		
		include "../PaginasProcessamento/conexao.php";
		$sql = "SELECT * FROM tb_candidatos WHERE id_candidato= $id";	
		$votebem = $banco -> prepare($sql);
		$votebem -> execute();
		
		foreach($votebem as $candidato){
		
		if(isset($_POST['enviar'])){
			$nome              = $_POST["nome"];
			$numero            = $_POST["numero"];
			$cargo             = $_POST["cargo"];
			$cidade            = $_POST["cidade"];
			$estado            = $_POST["estado"];
			$nascimento        = $_POST["nascimento"];
			$partido           = $_POST["id_partido"]; //nao recebe partido
			$foto              = "img";
			
			include "../PaginasProcessamento/conexao.php";
			$sql = "UPDATE tb_candidatos SET nome=?, foto=?, numero_candidato=?, cargo=?, cidade=?, estado=?, data_nascimento=?, id_partido=? WHERE id_candidato='$id'";	
			$votebem = $banco -> prepare($sql);
			$votebem -> execute(array($nome,$foto,$numero,$cargo,$cidade,$estado,$nascimento,$partido));
			//header("Location:menu_candidatos.php?cadastro=ok");
			}
		}
	?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Editar Candidato</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="../css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body>
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
						<li><a href="../login.php" class="waves-effect waves-light btn blue lighten-2" href="login.html">Login</a></li>
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
						<a href="menu_candidatos.php" class="breadcrumb">Menu de Candidatos</a>
						<a href="editar_candidatos.php" class="breadcrumb">Editar Candidato</a>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
					  <h3 class="center">Editar Candidatos</h3>
					</div>
				</div>
				<div class="row">
                    <form method="GET" action="" class="col s12">
                        <div class="row">
							<select name="id" required id="seleciona" required>
                                    <option value="" disabled selected>Selecione o registro que deseja editar</option>
                                   <?php 
									include "conexao.php";
									$sql     = "SELECT * FROM tb_candidatos";
									$votebem = $banco -> prepare($sql);
									$votebem -> execute();
								
									foreach($votebem as $id){ ?>
									<option value="<?php echo $id['id_candidato'];?>"><?php echo $id['nome'];?></option>
									<?php														
									}
									?>
                              </select>
						</div>
						<div class="row">
							<div class="col s12 center">
								<button class="btn waves-effect waves-light" type="submit" name="enviar" >Enviar 
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
				<div class='row'>
					<form method="POST" action="" class="col s12" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nome" autofocus required name="nome" type="text" value='<?php if(isset($candidato)){echo $candidato['nome'];}?>'class="validate">
                                <label for="first_name">Nome</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="numero" required name="numero" value='<?php if(isset($candidato)){echo $candidato['numero_candidato'];}?>' type="text" class="validate">
                                <label for="first_name">Número</label>
                            </div>
                        </div>
						<div class="row">
							<div class="file-field input-field col s12 m6">
							  <div class="btn">
								<span>Imagem</span>
								<input type="file" name="img">
							  </div>
							  <div class="file-path-wrapper col 12 m6">
								<input class="file-path validate" type="text">
							  </div>
							</div>
							<div class="col input-field col s12 m6">
								<input id="numero" required name="cargo" value='<?php if(isset($candidato)){echo $candidato['cargo'];}?>'type="text" class="validate">
								<label for="first_name">Cargo</label>
							 </div>
					    </div>
                      </div>
					  <div class="row">
						<div class="input-field col s12 m6">
							<input id="ano_fundacao" required type="text" value='<?php if(isset($candidato)){echo $candidato['cidade'];}?>'name="cidade" class="validate" required>
							<label for="ano_fundacao">Cidade</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="ideais" required type="text" value='<?php if(isset($candidato)){echo $candidato['estado'];}?>'name="estado" class="materialize-textarea validate">
							<label for="ideais">Estado</label>
						</div>
					   </div>
					   <div class="row">
						<div class="input-field col s12 m6">
							<input id="ano_fundacao" required type="text" name="nascimento" value='<?php if(isset($candidato)){echo $candidato['data_nascimento'];}?>'class="validate" data-mask="00/00/0000" max-length=8 required>
							<label for="ano_fundacao">Data de Nascimento</label>
						</div>
						<div class="input-field col s12 m6">
							<select name="partido" required id="seleciona" required>
								<option value="" disabled selected><?php if(isset($candidato)){echo $candidato['partido'];}?></option>
								<?php 
									include "../PaginasProcessamento/conexao.php";
									$sql     = "SELECT * FROM tb_partidos";
									$votebem = $banco -> prepare($sql);
									$votebem -> execute();
								
									foreach($votebem as $id){ ?>
									<option value="<?php echo $id['id_partido'];?>"><?php echo $id['nome'];?></option>
									<?php														
									}
									?>
							</select>
						</div>
					   </div>						
						<div class="row">
							<div class="col s12 center">
								<button class="btn waves-effect waves-light" type="submit" name="enviar" >Enviar 
									<i class="material-icons right">send</i>
								</button>
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
					2017 Copyright - Todos os direitos reservados
				</div>
			</div>
		</footer>
		<!-- mascara-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jQueryMaskPlugin/dist/jquery.mask.min.js"></script>
		<!-- outros -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript" src="../js/custom.js"></script>
	</body>
</html>
<di
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Cadastro de Notícia</title>
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
						<li><a href="../agenda.html">Agenda</a></li>
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
						<a href="menu_noticias.php" class="breadcrumb">Menu de Notícias</a>
						<a href="NovaNoticia.php" class="breadcrumb">Cadastro de Notícia</a>
					</div>
				</div>
			</nav>				
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3 class="center">Cadastro de Notícia</h3>
					</div>	
				</div>
				<div class="row">
                    <form class="col s12" action="../PaginasProcessamento/recebeNoticia.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="titulo" name="titulo" type="text" class="validate" data-length="30">
                          <label for="titulo">Titulo da notícia</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="resumo" name="resumo" type="text" class="validate" data-length="50">
                          <label for="resumo">Resumo da notícia</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="file-field input-field col s12">
                          <div class="btn">
                            <span>Imagem</span>
                            <input type="file" name="img">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                      </div>
                        <div class="row">
                            <div class="s12 m6">
                                <div class="input-field col s12">
                                  <textarea id="noticia" name="noticia" class="materialize-textarea"></textarea>
                                  <label for="noticia">Notícia</label>
                                </div>
                            </div>
                        </div>
                          <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                          </button>
                    </form>
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

        <script>
            $(document).ready(function() {
                $('input#titulo, input#resumo').characterCounter();
            });
        </script>
	</body>
</html>
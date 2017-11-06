<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Notícias</title>
		<meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="css/estilo.css" media="screen,projection" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

<?php
		$sql = "SELECT * FROM tb_noticias";
		include "PaginasProcessamento/conexao.php";
		$vb = $banco -> prepare($sql);
		$vb -> execute();
	?>
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
                    <li><a href="login.php" class="waves-effect waves-light btn blue lighten-2">Login</a></li>
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
              <a href="noticias.php" class="breadcrumb">Notícias</a>
            </div>
          </div>
        </nav>
        <div class="center">
            <h1>Notícias</h1>
        </div>
                
        <div class="container">
            <div class="row">
            <?php
            foreach($vb as $noticias){
                $id               = $noticias['id_noticia'];
                $titulo           = $noticias["titulo_noticia"];
                $img              = $noticias["imagem"];
                $texto            = $noticias["texto"];
                $resumo           = $noticias["resumo"];
                $imagem           = $noticias["imagem"];
                $modal            = "#modal".$id;
                $modalid          = "modal".$id;
                
                echo   "
                            <div class='col s12 m6 l4'>
                              <div class='card'>
                                <div class='card-image'>
                                  <img src='imgs/noticias/$img'>
                                  <a href='$modal' class='btn-floating halfway-fab waves-effect waves-light red modal-trigger'><i class='material-icons'>add</i></a>
                                </div>
                                <div id='$modalid' class='modal modal-fixed-footer'>
                                    <div class='modal-content'>
                                        <h4>$titulo</h4>
                                        <p>$texto</p>
                                    </div>
                                    <div class='modal-footer'>
                                        <a href='#!' class='modal-action modal-close waves-effect waves-blue btn-flat'>Sair</a>
                                    </div>
                                </div>
                                <div class='card-content'>
                                    <span class='card-title'>$titulo</span>
                                  <p>$resumo</p>
                                </div>
                              </div>
                        </div>";
                
            }
                
            ?>
            </div>
        </div>
        
        
        <!-- BASE MODAL 

  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>


  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
        -->
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
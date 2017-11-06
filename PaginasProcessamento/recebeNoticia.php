<?PHP
    $id        = "";
	$titulo    = $_POST['titulo'];
    $resumo    = $_POST['resumo'];
    $noticia   = $_POST['noticia'];
    $Arq       = $_FILES['img'];
    $nomeArq   = $Arq['name'];
    $tamanho   = $Arq['size'];
    $tmp       = $Arq['tmp_name'];
    $formato   = pathinfo($nomeArq, PATHINFO_EXTENSION);
    $nomeBdArq = uniqid().".".$formato;
	$upload         = move_uploaded_file($tmp, '../imgs/noticias/'.$nomeBdArq );

	include "conexao.php";
	$sql     = "INSERT INTO tb_noticias VALUES(?,?,?,?,?)";
	$votebem = $banco -> prepare($sql);	
	$votebem -> execute(array($id,$titulo,$nomeBdArq,$noticia,$resumo));	
	$votebem = null;
	header("Location: ../PagsControle/menu_noticias.php?cadastro=ok");	





?>
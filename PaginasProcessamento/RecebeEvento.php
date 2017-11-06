<?PHP
    $id        = "";
	$nome      = $_POST['nome'];
    $desc      = $_POST['desc'];
    $ingresso  = $_POST['ingresso'];
    $data      = $_POST['data'];
    $horario   = $_POST['horario'];
    $local     = $_POST['local'];
    $Arq       = $_FILES['img'];
    $nomeArq   = $Arq['name'];
    $tamanho   = $Arq['size'];
    $tmp       = $Arq['tmp_name'];
    $formato   = pathinfo($nomeArq, PATHINFO_EXTENSION);
    $nomeBdArq = uniqid().".".$formato;
	$upload         = move_uploaded_file($tmp, '../imgs/eventos/'.$nomeBdArq );

	include "conexao.php";
	$sql     = "INSERT INTO tb_eventos VALUES(?,?,?,?,?,?,?,?)";
	$votebem = $banco -> prepare($sql);	
	$votebem -> execute(array($id,$nome,$nomeBdArq,$desc,$ingresso,$data,$horario,$local));	
	$votebem = null;
	header("Location: ../PagsControle/menu_eventos.php?cadastro=ok");	





?>
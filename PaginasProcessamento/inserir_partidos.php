<?PHP
	$id                = "";
    $nome              = $_POST["nome"];
    $sigla             = $_POST["sigla"];
    $ano_fundacao      = $_POST["ano_fundacao"];
    $ideais            = $_POST["ideais"];
	$Arq               = $_FILES['img'];
    $nomeArq           = $Arq['name'];
    $tamanho           = $Arq['size'];
    $tmp               = $Arq['tmp_name'];
    $formato           = pathinfo($nomeArq, PATHINFO_EXTENSION);
    $nomeBdArq         = uniqid().".".$formato;
	$upload            = move_uploaded_file($tmp, '../imgs/partidos/'.$nomeBdArq );	

	include "conexao.php";
	$sql     = "INSERT INTO tb_partidos VALUES(?,?,?,?,?,?)";
	$votebem = $banco -> prepare($sql);	
	$votebem -> execute(array($id,$nome,$nomeBdArq,$sigla,$ano_fundacao,$ideais));	
	$votebem = null;
	header("Location: ../PagsControle/menu_partidos.php?cadastro=ok");
	
?>
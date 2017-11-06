<?PHP
	$id                = "";
    $nome              = $_POST["nome"];
    $numero            = $_POST["numero"];
    $cargo             = $_POST["cargo"];
    $cidade            = $_POST["cidade"];
    $estado            = $_POST["estado"];
    $nascimento        = $_POST["nascimento"];
    $partido           = $_POST["partido"]; //não reconhece valor do select
	$Arq               = $_FILES['img'];
    $nomeArq           = $Arq['name'];
    $tamanho           = $Arq['size'];
    $tmp               = $Arq['tmp_name'];
    $formato           = pathinfo($nomeArq, PATHINFO_EXTENSION);
    $nomeBdArq         = uniqid().".".$formato;
	$upload            = move_uploaded_file($tmp, '../imgs/candidatos/'.$nomeBdArq );	

	include "conexao.php";
	$sql     = "INSERT INTO tb_candidatos VALUES(?,?,?,?,?,?,?,?,?)";
	$votebem = $banco -> prepare($sql);	
	$votebem -> execute(array($id,$nome,$nomeBdArq,$numero,$cargo,$cidade,$estado,$nascimento,$partido));	
	$votebem = null;
	
	echo $id;
	echo $nome;
	echo $numero;
	echo $cargo;
	echo $cidade;
	echo $estado;
	echo $nascimento;
	echo $partido;
	/*header("Location: ../PagsControle/menu_candidatos.php?cadastro=ok");*/
	
?>
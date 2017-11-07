<?PHP
	$id             = "";
    $pergunta       = $_POST["pergunta"];
    $r1             = $_POST["r1"];
    $r2             = $_POST["r2"];
    $r3             = $_POST["r3"];
    $r4             = $_POST["r4"];
	$Arq            = $_FILES['img'];
    $nomeArq        = $Arq['name'];
    $tamanho        = $Arq['size'];
    $tmp            = $Arq['tmp_name'];
    $formato        = pathinfo($nomeArq, PATHINFO_EXTENSION);
    $nomeBdArq      = uniqid().".".$formato;
	$upload         = move_uploaded_file($tmp, '../imgs/quiz/'.$nomeBdArq );	

	include "conexao.php";
	$sql     = "INSERT INTO tb_quiz VALUES(?,?,?,?,?,?,?)";
	$votebem = $banco -> prepare($sql);	
	$votebem -> execute(array($id,$pergunta,$r1,$r2,$r3,$r4,$nomeBdArq));	
	$votebem = null;
	header("Location: ../PagsControle/menu_quiz.php?cadastro=ok");
	
?>
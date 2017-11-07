<?PHP
    $id                = "";
    $nome              = $_POST["nomecompleto"];
    $email             = $_POST["email"];
    $senha             = $_POST["senha"];
    $confirmar_senha   = $_POST["confirmar_senha"];  

    if($senha !== $confirmar_senha){
        header("Location: ../cadastro.php?senha=invalido");
    }else{
        $nascimento        = $_POST["nascimento"];
        $sexo              = $_POST["sexo"];
        $senha_banco = $senha;
        include "conexao.php";
        $sql     = "INSERT INTO tb_usuarios VALUES(?,?,?,?,?,?)";
        $votebem = $banco -> prepare($sql);	
        $votebem -> execute(array($id,$nome,$email,$senha_banco,$nascimento,$sexo));	
        $votebem = null;
        header("Location: ../login.php?cadastro=ok");
    }


    
?>
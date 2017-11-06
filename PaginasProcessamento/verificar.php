<?php
	$correto = null;
	$email = $_POST['email'];
	$senha   = $_POST['senha'];

		session_start();	
		include "conexao.php";
		$sql= "SELECT * FROM tb_usuarios"; 
		$votebem = $banco -> prepare($sql);
		$votebem -> execute();
	
		foreach($votebem as $usuarios){		
			$emailbd  =  $usuarios['email'];
			$senhabd  	 = $usuarios['senha'];
			
			if(($emailbd == $_POST['email']) && ($senhabd == $_POST['senha'])){
				$correto = 1;
			}
		}
		
		if($correto == 1){
			$_SESSION['login'] = 1;	
			header("Location: ../index.html");//colocar destino 
		}else{
			$_SESSION['login'] = "Login incorreto";
			header("Location: ../login.php");//colocar destino
			session_destroy();
		}		
?>
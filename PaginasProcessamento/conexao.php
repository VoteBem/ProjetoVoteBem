<?php
	try{ 
		$banco = new PDO("mysql:host=localhost;dbname=vote_bem","root","");
		
	} 
	catch(PDOException $e){ 
		echo $e->getMessage(); 		
	}

?>
<?php 
	//constantes
	define("HOST","localhost");
	define("DB","banque");
	define("USER","admin");
	define("PASS","admin");

	try{
		$bd = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS);
	} catch (PDOException $e) {
		die($e->getMessage());
	}

 ?>
<?php 
	//constantes
	define("HOST","localhost");
	define("DB","banque");
	define("USER","root");
	define("PASS","root");

	try{
		$bd = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS);
	} catch (PDOException $e) {
		die($e->getMessage());
	}

 ?>
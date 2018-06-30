<?php 
	if(!empty($_GET["id"])){
		require_once("../../bd/bd.php");
		$sql = "DELETE FROM sbrhtb042 WHERE id_categorie_poste = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
          )
       );
       header("location:Categorie_de_poste.php#txt_pk");
	   exit();
	}else{
		header("location:Agences.php#txt_pk");
		exit();
	}

?>
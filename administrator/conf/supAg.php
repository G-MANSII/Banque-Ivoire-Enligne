<?php 
	if(!empty($_GET["id"])){
		require_once("../../bd/bd.php");
		echo "<script>alert('êtes vous sûr ')</script>";
		$sql = "DELETE FROM sbrhtb013 WHERE id_agence = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
          )
       );
       header("location:Agences.php#txt_pk");
	   exit();
	}else{
		header("location:Agences.php#txt_pk");
		exit();
	}

?>
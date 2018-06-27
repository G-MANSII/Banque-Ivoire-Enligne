<?php 
	//sbrhtb001
	echo "";
	// effectuer la requête sql
	$sql = $bd->query('SELECT * FROM sbrhtb040');
	
	// afficher les resultats
	while($row = $sql->fetch()) {
		echo "{$row['id_pays']} by {$row['nom pays']} <br>";
	}

	$sql = 'SELECT * FROM sbrhtb040 WHERE id_pays = :id';
	$stmt = $bd->prepare($sql);
	
	$stmt->execute(array(
	"id" => 1)
	);
	$recipe = $stmt->fetch();
	print_r($recipes);

	if(true){}else{}  | if(true){}  | while(true){} | do{}while(true)
	

	for($i=0;$i<10;$i++){} |foreach ($var as $key => $value){} |

	switch(var){case 1:break;}

 ?>
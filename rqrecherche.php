<?php 
	include 'connexion.php';
	
	$q = $_POST['q'];

	switch ($q) {
		case 'recherche':
		$nom = $_POST['nom'];
		

		$req = "SELECT * FROM produit WHERE 1=1";
		if ($nom != "") {
			$req .= " AND nom LIKE '%$nom%'";
		}
		
		$res = @mysql_query($req);
		while ($r = mysql_fetch_assoc($res)) {
			echo '<img src="upload/'.$r['logo'].'" width="300"  />';
			echo($nom);
			

		}

	break;

	switch ($q) {
		case 'recherche2':
		$nom = $_POST['nom'];
		$prennom = $_POST['prenom'];
		$ville = $_POST['ville'];
		

		$req = "SELECT * FROM client WHERE 1=1";
		if ($nom != "") {
			$req .= " AND nom LIKE '%$nom%'";
		}

		if ($prenom != "") {
			$req .= " AND prenom LIKE '%$prenom%'";
		}

		if ($ville != "") {
			$req .= " AND ville LIKE '%$ville%'";
		}
		
		$res = @mysql_query($req);
		while ($r = mysql_fetch_assoc($res)) {
			echo($nom);
			

		}

	break;

	



	}
?>
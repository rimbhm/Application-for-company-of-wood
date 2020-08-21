<?php
	
	include 'connexion.php';
	
	$t = $_GET['t'];
	$idfournisseur = intval($_GET['idfournisseur']);

	switch ($t) {
		case 'fournisseur':
			$q = @mysql_query("DELETE FROM  fournisseur WHERE idfournisseur=".$idfournisseur);
			header('Location: '.$_SERVER['HTTP_REFERER']);
			break;
	}
?>
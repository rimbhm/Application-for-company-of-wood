<?php
	
	include 'connexion.php';
	
	$t = $_GET['t'];
	$id = intval($_GET['id']);

	switch ($t) {
		case 'produit':
			$q = @mysql_query("DELETE FROM produit WHERE id=".$id);
			header('Location: '.$_SERVER['HTTP_REFERER']);
			break;
	}
?>
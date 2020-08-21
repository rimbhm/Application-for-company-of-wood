<?php
	
	include 'connexion.php';
	
	$t = $_GET['t'];
	$idouvrier = intval($_GET['idouvrier']);

	switch ($t) {
		case 'ouvrier':
			$q = @mysql_query("DELETE FROM ouvrier WHERE idouvrier=".$idouvrier);
			header('Location: '.$_SERVER['HTTP_REFERER']);
			break;
	}
?>
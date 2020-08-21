<?php
	
	include 'connexion.php';
	
	$t = $_GET['t'];
	$id = intval($_GET['id']);

	switch ($t) {
		case 'client':
			$q = @mysql_query("DELETE FROM client WHERE id=".$id);
			header('Location: '.$_SERVER['HTTP_REFERER']);
			break;
	}
?>
<?php 
	
	include 'connexion.php';

	$login = $_POST['login'];
	$mot = $_POST['mot'];

	$q = @mysql_query("SELECT * FROM client WHERE login LIKE '$login' AND mot='$mot'");
	$count = @mysql_num_rows($q);
	//echo $count;

	

	if ($count == 1) { // L'admin existe
		session_start();
		$_SESSION['login'] = $login;
		echo 'true';
	}
	

?>
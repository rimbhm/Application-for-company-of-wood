<?php 
	
	include 'connexion.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$q = @mysql_query("SELECT * FROM admin WHERE email LIKE '$username' AND password='$password'");
	$count = @mysql_num_rows($q);

	if ($count == 1) { // L'admin existe
		session_start();
		$_SESSION['login'] = $username;
		echo 'true';
	}

?>
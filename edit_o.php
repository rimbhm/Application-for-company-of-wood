

<?php 
	
	include 'connexion.php';

                $idouvrier = $_POST['id'];
				$nom = mysql_real_escape_string($_POST['nom']);
				$prenom = mysql_real_escape_string($_POST['prenom']);
				$adresse = $_POST['adresse'];
				$email = mysql_real_escape_string($_POST['email']);
				$tel = $_POST['tel'];
				$salaire = $_POST['salaire'];


$q = @mysql_query("UPDATE ouvrier SET nom='$nom', prenom='$prenom',adresse='$adresse', `e-mail`='$email',tel='$tel',salaire='$salaire' WHERE idouvrier=".$idouvrier);
				echo mysql_error();

?>
<?php 
	
	include 'connexion.php';

                $id = $_POST['id'];
                $cin = $_POST['cin'];
				$nom = mysql_real_escape_string($_POST['nom']);
				$prenom = mysql_real_escape_string($_POST['prenom']);
				$email = mysql_real_escape_string($_POST['email']);
				$adresse =mysql_real_escape_string($_POST['adresse']);
				$ville = $_POST['ville'];
				$tel = $_POST['tel'];
				$login = mysql_real_escape_string($_POST['login']);
				$mot = mysql_real_escape_string($_POST['mot']);
				
			

$q = @mysql_query("UPDATE client SET cin='$cin',nom='$nom', prenom='$prenom', `e-mail`='$email', adresse='$adresse', ville='$ville', telephone='$tel', login='$login', mot='$mot' WHERE id=".$id);
echo mysql_error();

?>
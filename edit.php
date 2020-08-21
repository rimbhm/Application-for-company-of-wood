

<?php 
	
	include 'connexion.php';

                $id = $_POST['id'];
				$nom = mysql_real_escape_string($_POST['nom']);
				$prix = $_POST['prix'];
				$desc = mysql_real_escape_string($_POST['desc']);
				$date = $_POST['date'];
			
				
			

				$q = @mysql_query("UPDATE produit SET nom='$nom', prix='$prix', `desc`='$desc', `date`='$date' WHERE id=".$id);
				echo $id;

?>
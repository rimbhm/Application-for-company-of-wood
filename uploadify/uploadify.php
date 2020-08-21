<?php

include '../connexion.php';

$targetFolder = '../upload/'; // Define a destination

$id = $_POST['id'];

if (!empty($_FILES)) {

	$file = md5(date('YmdHis')).'.jpg';

	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $targetFolder;
	$targetFile = rtrim($targetPath,'/') . '/' . $file;
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','JPG','JPEG','PNG','GIF'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	$fichier = $_FILES['Filedata']['name'];
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);

		$q = @mysql_query("UPDATE produit SET logo='$file' WHERE id=".$id);

	} else {
		echo 'Invalid file type.';
	}
}
?>
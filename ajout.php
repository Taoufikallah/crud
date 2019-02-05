<?php
    $code=$_POST['code'];
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$nomPhoto=$_FILES['photo']['name'];
	$tempName=$_FILES['photo']['tmp_name'];
	move_uploaded_file($tempName, "images/".$nomPhoto);
	//echo "le nom du fichier temporaire : ".$tempName;
	require 'server.php';
	$stmt=$cn->prepare('INSERT INTO etudiant (code,nom,email,photo) VALUES(?,?,?,?)');
	$parametres=array($code,$nom,$email,$nomPhoto);
	$stmt->execute($parametres);
header('location:afficher.php');



?>
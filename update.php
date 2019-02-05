
<?php

require 'server.php';
$code=$_POST['code'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
$temp=$_FILES['photo']['tmp_name'];
//
if ($nomPhoto=="") {
	$req='UPDATE etudiant SET nom=?,email=? WHERE code=?';
$st=$cn->prepare($req);
$param=array($nom,$email,$code);
$st->execute($param);
}

//
else {
move_uploaded_file($temp, "images/".$nomPhoto);
$req='UPDATE etudiant SET nom=?,email=?,photo=? WHERE code=?';
$st=$cn->prepare($req);
$param=array($nom,$email,$nomPhoto,$code);
$st->execute($param);
     }
header('location:afficher.php');
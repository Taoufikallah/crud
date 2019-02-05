

<?php

$code=$_GET['code'];
require 'server.php';
$stmt=$cn->prepare('DELETE FROM etudiant WHERE code=?');
$params=array($code);
$stmt->execute($params);
//echo "supression réussite";
header('location:afficher.php');
<?php
$code=$_GET['id'];
require 'server.php';
$st=$cn->prepare('DELETE FROM personne WHERE id=?');
$params=array($code);
$st->execute($params);
header('location:afficher.php');
?>
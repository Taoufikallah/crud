<?php
// méthode de connection classique
/*$connect=mysql_connect('localhost','root','')
or die(mysql_error());
$data=mysql_select_db('miage') or die(mysql_error());
echo "tout est bon";*/

//Méthode avec PDO
try {
$chaine=('mysql:host=localhost;dbname=miage1');
$cn=new PDO($chaine,'root','');
//echo "tous est bon";
} catch (Exception $e) {
	echo $e->getMessage();
}


?>
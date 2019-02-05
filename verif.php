
<?php
if (isset($_POST['login'])) {
	$log=$_POST['pseudo'];
	$passe=md5($_POST['pass']);
	require 'server.php';
	$stmt=$cn->prepare('SELECT * FROM comptes WHERE login=? and mdp=?');
	$parametres=array($log,$passe);
	$stmt->execute($parametres);
if ($rs=$stmt->fetch()) {

	//
		session_start();
		$_SESSION['droit'] = 
	//q
	//echo "bonjour mr ".$log." votre mot de //passe est ".$passe." vous etes //autorisé";qq
	header('location:afficher.php');
}
else {
	header('location:index.php');
}
}

?>
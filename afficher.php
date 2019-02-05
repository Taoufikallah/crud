
<?php

require 'server.php';
$req='SELECT * FROM etudiant';
$ps=$cn->prepare($req);
$ps->execute();
/*while ($result=$ps->fetch()) {
echo "<br>le nom est : ".$result['nom']."<br>";
echo "le prenom est : ".$result['prenom']."<br>";
	echo "l'adresse est : ".$result['adresse']."<br>";*/
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="UTF-8">
	  <script type="text/javascript">

	  </script>
        <title>Cafe</title>
		<link rel="icon" type="image/png" href="img/cafe.png" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/app.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php	
require 'navbar.php';
?>

	<h1>la liste des personnes</h1>
<table class="table table-bordered" >
	 <tr>
	 <th>code</th>
	 <th>Nom</th><th>Email</th><th>Photo</th>
   
	 <th>Action</th>  

	 </tr>
<?php while ($result=$ps->fetch()) {	?> 
<tr>
	<td ><?php echo $result['code'] ?></td>
	<td ><?php echo $result['nom'] ?></td>
	<td ><?php echo $result['email'] ?></td>
	<td >
        <div class="img-responsive"><img src="images/<?php echo $result['photo'] ;?>"></div>
		</td>
	
		<td><a href="suprimer.php?code=<?php echo 
	$result['code']; ?>" class="btn btn-danger">suprimer</a>
        <a href="modifier.php?code=<?php echo 
	$result['code']; ?>" class="btn btn-warning">Modifier</a>
	</td>


	
</tr>
<?php }  ?>
</table>
<a href="ajouter.php" class="btn btn-warning">
	Ajouter </a>
</body>
</html>
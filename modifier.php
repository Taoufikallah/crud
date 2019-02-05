<?php

$code=$_GET['code'];
require 'server.php';
$req='SELECT * FROM etudiant WHERE code=?';
$para=array($code);
$st=$cn->prepare($req);
$st->execute($para);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">	
</head>
<body>
	<?php	
require 'navbar.php';
?>
<h1>modifier personnes</h1>
<form action="update.php" method="post" enctype="multipart/form-data" >
	<table class="table table-stripped">
		<?php while ($rs=$st->fetch()) { ?>
<tr>
	<td>CODE:</td>
	<td><input type="text" name="code" value="<?php echo $rs['code']; ?>" readonly></td>
</tr>
		 <tr>
	<td>Nom:</td>
	<td><input type="text" name="nom" value="<?php echo $rs['nom']; ?>"></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="email" value="<?php echo $rs['email']; ?>"></td>
</tr>
<tr>
	<td>Photo:</td>
	<td><input type="file" name="photo">
<img src="images/<?php echo $rs['photo']; ?>">
	 </td>
</tr>
<?php } ?>

		<tr>
<td>	<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary"></td>
	<td><input type="reset" name="annuler" value="annuler" class="btn btn-danger"></td>
		</tr>
	</table>
</form>
</body>
</html>
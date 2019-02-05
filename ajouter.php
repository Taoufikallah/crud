
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">	
</head>
<body>
<h1>Ajouter personnes</h1>
<form action="ajout.php" method="post" enctype="multipart/form-data">
	<table class="table table-stripped">
<tr>
	<td>Code:</td>
	<td><input type="text" name="code" placeholder="code etudiant"></td>
</tr>
<tr>
	<td>Nom:</td>
	<td><input type="text" name="nom" placeholder="votre nom"></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="email" name="email" placeholder="votre email"></td>
</tr>
<tr>
	<td>Photo:</td>
	<td><input type="file" name="photo"></td>
</tr>
		<tr>
<td>	<input type="submit" name="ajouter" value="ajouter" class="btn btn-primary"></td>
	<td><input type="reset" name="annuler" value="annuler" class="btn btn-danger"></td>
		</tr>
	</table>
</form>
</body>
</html>
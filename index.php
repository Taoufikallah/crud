<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Authentification</h1>
<form action="verif.php" method="post">
<table class="table table-bordered" >
	<tr>
		<td>Username:</td>
		<td><input type="text" name="pseudo" placeholder="votre pseudo"></td>
	</tr>
	<tr>
		<td>Passowrd:</td>
		<td><input type="password" name="pass" placeholder="votre password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="login" value="LogIn" class="btn btn-primary"></td>
		<td><input type="reset" name="reset" value="Cancel" class="btn btn-danger"></td>
	</tr>
</table>
</form>
</body>
</html>
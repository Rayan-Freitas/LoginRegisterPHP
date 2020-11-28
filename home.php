<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Inicial</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">


	<a href="logout.php" class="float-right"> SAIR </a>

	<h1> Bem-vindo  <?php echo $_SESSION['username']; ?>  </h1>

	</div>

</body>
</html>
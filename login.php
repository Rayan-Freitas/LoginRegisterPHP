<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="login-box"> </div>
	<div class="row">
	<div class="col-md-6 login-left">
		<h2>Login aqui!</h2>
		<form action="validation.php" method="post">

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>

			<button type="submit" class="btn btn-primary"> Login </button>

		</form>
		
	</div>

	<div class="col-md-6 login-right">
		<h2>Registre-se Aqui!</h2>
		<form action="registration.php" method="post">   

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>

			<button type="submit" class="btn btn-primary"> Registre-se </button>

		</form>

	</div>
	<!--
	<button type="button" class="btn">Basic</button>
	<button type="button" class="btn btn-default">Default</button>					TIPOS DE BOTÕES BOOTSTRAP
	<button type="button" class="btn btn-primary">Primary</button>					W3 SCHOOLS
	<button type="button" class="btn btn-success">Success</button>					tire o comentário para ver 
	<button type="button" class="btn btn-info">Info</button>
	<button type="button" class="btn btn-warning">Warning</button>
	<button type="button" class="btn btn-danger">Danger</button>
	<button type="button" class="btn btn-link">Link</button>
	-->

</div>

</body>
</html>
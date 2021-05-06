<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color:#eee;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>

</head>
<body>
	
	<div class="container">
		<div class="row">
			<h2>Log In</h2>
			<div class="login">				
				<form role="form" action="dashboard.php" method="post">

					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" />
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password"/>
					</div>
				
					<div class="form-group">
						<a href="dashboard.php" class="btn btn-primary btn-round btn-block">SIGN IN</a>
						<a href="singup.php" class="btn btn-primary btn-simple btn-round btn-block">SIGN UP</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
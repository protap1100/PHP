<?php include 'class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System With oop </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center text-info">Login And Registation System with OOP php</h2>
	<div class="container">
		<div>
			<form method="post" action="">
				<div class="form-group">
				<label>Username:</label>
				<input class="form-control" type="text" name="username" placeholder="Enter your Username">
				<label>Password	:</label>
				<input class="form-control" type="password" name="password" placeholder="Enter your Password">
				<br>
				<input type="submit" class="btn btn-primary" name="submit" value="Login">
				<a class="btn btn-primary" href="Registration.php">Registration Here</a>
			    </div>
			</form>

			<?php 
			$obj = new Model();

			if (isset($_POST['submit'])) {
				$obj->Login($_POST);
			}

			  ?>
		</div>
	</div>
</body>
</html>
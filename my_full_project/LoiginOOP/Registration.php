 <?php include 'class.php'; ?>

 <?php 

 $obj = new Model();

if (isset($_POST['submit'])) {
	$obj->Registration($_POST);
}


  ?>

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
			<h3>
				<?php  
					if (isset($_GET['msg']) AND $_GET['msg']=='ins') {
						echo "Data Inserted Successfully <a href='index.php'>Login now</a> ";
					}
				  ?>
			</h3>
		</div>
		<div>
			<form method="post" action="">
				<div class="form-group">
				<label>Name:</label> 
				<input class="form-control" type="text" name="name" placeholder="Enter your Name" required="">
				<label>Username:</label> 
				<input class="form-control" type="text" name="username" placeholder="Enter your Password" required="">
				<label>Email:</label>
				<input class="form-control" type="email" name="email" placeholder="Enter your Email" required="">
				<label>Password:</label>
				<input class="form-control" type="password" name="password" placeholder="Enter your Password" required="">
				<label>Phone:</label>
				<input class="form-control" type="number" name="phone" placeholder="Enter your Phone" required="">
				<br>
				<input type="submit" class="btn btn-primary" name="submit" value="Register">
			    </div>
			</form>
		</div>
	</div>
</body>
</html>
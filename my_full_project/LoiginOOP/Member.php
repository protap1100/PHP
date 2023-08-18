<?php include 'class.php'; ?>

<?php 

$obj = new Model();

if (isset($_SESSION['id'])) {
	$user = $obj->Security($_SESSION["id"]);
	header('location:Member.php');
}else{
	
}


if (isset($_GET['deleteid'])) {
	$delid=$_GET['deleteid'];
	$obj->Delete($delid);
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System With oop </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center text-info">All Member </h2>
    <div>
    	<?php
    	if (isset($_POST['msg']) AND $_POST['msg']=='del') {
    		echo '<div class="alert alert-primary" role="alert">
    							  Deleted Successfully..!
    							</div>';
    	}

    	?>

    </div>
	<div class="container">
		<div><a class="btn btn-primary" href="Registration.php">Add Member</a></div> <br>
		<table class="table table-bordered">
			<tr class = "bg-primary text text-center">
				<th>Sno:</th>
				<th>Name:</th>
				<th>Username:</th>
				<th>Email:</th>
				<th>Password:</th>
				<th>Phone:</th>
				<th>Action:</th>
			</tr>
			<?php 

			
			//Dispaying the data
			$data = $obj->display();
			$sno = 1;
			foreach($data as $value){
				?>

				<tr>
				<td class="text-center"><?php echo $sno++; ?></td>
				<td class="text-center"><?php echo $value['name']; ?></td>
				<td class="text-center"><?php echo $value['username']; ?></td>
				<td class="text-center"><?php echo $value['email']; ?></td>
				<td class="text-center"><?php echo $value['password']; ?></td>
				<td class="text-center"><?php echo $value['phone']; ?></td>
				<td class="text-center">
					<a class="btn btn-primary" href="Registration.php?updateid=<?php echo $value['id']; ?>">Update</a>
					<a class="btn btn-danger" href="Member.php?deleteid=<?php echo $value['id']; ?>">Delete</a>
				</td>
			</tr>
				<?php
			}
			?>
			
		</table>
		<a class="btn btn-primary" href="logout.php">Log out  </a>
	</div>

</body>
</html>
<?php
include 'connection.php';

$name= $_POST['name'];
$mob= $_POST['mob'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$add = $_POST['add'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$rule = $_POST['rule'];

if ($cpass!=$pass) {
      echo'<script> 
      	   alert("password do not match");
      	   window.loaction = "../api/register.php";
      </script>';
}else{
	move_uploaded_file($tmp_name,"/images");
	$insert = mysqli_query($con,"insert into user (name, mobile, password, address, photo, status, votes, rule) values('$name', '$mob', '$pass', '$add', '$image', 0, 0, '$rule') ");
	if($insert){
		echo '<script> 
			alert("registration scuccessfull");
			window.location= "../";
		      </script>';
	}else{	echo "hacker";}
}


?>
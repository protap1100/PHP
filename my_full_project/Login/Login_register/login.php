<?php
session_start();
include 'connection.php';



if (isset($_POST['submit'])) {
	$name =$_POST['name'];
    $password = $_POST['password'];
    $mobile=$_POST['mobile'];
    $feedback=$_POST['feedback'];

	$sql = "INSERT INTO users (name,password,mobile,feedback) 
        VALUES ('".$name."', '".$password."', '".$mobile."', '".$feedback."')";
	$insert=mysqli_query($con,$sql);

 			if ($insert) {
 				header('location:registration_successfull.php');
 			}else
 		{
 			echo "wrong ";
 		}
 }





if (isset($_POST['loginbtn'])) {
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];

	$check = mysqli_query($con,"SELECT * FROM `users` WHERE mobile='$mobile'  AND password='$password'");
	if (mysqli_num_rows($check)>0) {
		  $fetch = mysqli_fetch_array($check);
		  $mobile = $fetch['mobile'];
		  $_SESSION['mobile'] = $mobile;
		  $password = $fetch['password'];
		  $_SESSION['password'] = $password;
		  
		  header("location:logout.php");
	}else{
		echo '<script> alert("login failed") </script>' ;
	}

}





if(isset($_POST['logoutbtn'])){
		session_destroy();
		header('location:index.php');
	}
?>
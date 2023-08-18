<?php 
session_start();
include 'connection.php';

$mobile=$_POST['mob'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$check=mysqli_query($con,"select * from user where mobile='$mobile' and password='$pass' and role='$role'");

if (mysqli_num_rows($check>0)) {
	$getGroups = mysqli_query($con,"selecT name,photo,votes,id from user where rule=2");
	if(mysqli_num_rows($getGroups)>0){
		$groups = mysqli_fetch_all($getGroups,MYSQLI_ASSOC);
		$_SESSIONS['groups'] = $groups;
	}
	$data = mysqli_fetch_assoc($check);
	$_SESSION['id']=$data['id'];
	$_SESSION['status']=$data['status'];
	$_SESSION['data'] = $data; echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }

?>
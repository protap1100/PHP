<?php

include 'connect.php';

if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];

	 $sql="delete from `crud` where id=$id";
	 $result=mysqli_query($con,$sql);
	 if ($result) {
	 	echo "deleted";
	 	
	 }else{
	 	die(mysqli_error($con));
	 }
}
function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;

  }


?>
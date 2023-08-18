<?php  

class Model{
	private $server   = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname   = "login_oop";
	private $con;


   public function __construct(){

   			   session_start();

   	           $this->con = new mysqli($this->server,$this->username,$this->password,$this->dbname);

   	           if (!$this->con) {
   	           	echo "okay";
   	           }
   }

   public function Registration($post){

   			$name = $_POST['name'];
   			$username = $_POST['username'];
   			$email = $_POST['email'];
   			$password = $_POST['password'];
   			$phone = $_POST['phone'];

   			$sql = "INSERT INTO users SET name='$name',username='username', email='$email',password='$password', phone='$phone'";

   			$res = mysqli_query($this->con,$sql);

   			if ($res) {
   				header('location:Registration.php?msg=ins');
   			}else{
   				echo $sql;
   			}


   }

   public function Display(){

   			$sql = "SELECT * FROM users";

   			$res = mysqli_query($this->con,$sql);

   			$count = mysqli_num_rows($res);

   			if ($count>0) {
   				while ($row = mysqli_fetch_assoc($res)) {

   						$data[] = $row;

   				}//while closed
   				return $data;

   			}// if else

   }//closed function

   public function Delete($delid){

   		$sql = "DELETE FROM users WHERE id='$delid'";

   		$res = mysqli_query($this->con,$sql);

   		if ($res) {	
   			header('location:Member.php?msg=del');
   		}else{
   			echo $sql;
   		}
   }

   public function Login($post){
   		

   		$myusername = mysqli_real_escape_string($this->con,$_POST['username']);
   		$mypassword = mysqli_real_escape_string($this->con,$_POST['password']);

   		$sql = "SELECT * FROM users WHERE username='$myusername' AND password='$mypassword'";

   		$res = mysqli_query($this->con,$sql);

   		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($res);

        if ($count==1) {
        	session_start('username');
        	$_SESSION['user_login'] =  $username;
          $_SESSION['user'] = $username; 


        	header('location:Member.php');
        }else{
        	echo "Please Try With a Vaild Username and Password";
        }


   }

   public function Logout(){

   	   if(session_destroy()) {
      header("Location:index.php");
       }
   }

   // public function Security($id){

   // 		$sql = "SELECT * FROM users WHERE id=$id";

   // 		$res = mysqli_query($this->con,$sql);

   // 		return mysqli_fetch_assoc($res);

   // }


}


 ?>
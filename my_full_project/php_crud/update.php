<?php
include 'connect.php';
$id=$_GET['updateid'];	
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$father_name=$row['father_name'];
$mobile=$row['mobile'];
$comment=$row['comment'];
$proffession=$row['proffession'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    $proffession = $_POST['proffession'];

    $sql="update `crud` set id=$id,name='$name',father_name='$father_name',mobile='$mobile',comment='$comment',proffession='$proffession'
    where id=$id";
    $result=mysqli_query($con,$sql)
    ;
    if ($result) {
       
      header('location:index.php');
      
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  	<div class="container my-5">
    <form method="post" action="" class="form-control">
  <div class="form-group">
		<h5 class="box-link"><a href="user.php">Add Member</a> <h5>
  </div>
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label >Father Name</label>
    <input type="text" class="form-control"  placeholder="Enter Father Name" name="father_name" autocomplete="off" value="<?php echo $father_name; ?>">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter Mobile" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>">
  </div>
  <div class="form-group">
    <label >Comment</label>
    <input type="text" class="form-control"  placeholder="Enter Comment" name="comment" autocomplete="off" value="<?php echo $comment; ?>">
  </div>
  <div class="form-group">
    <label >Proffession</label>
    <input type="text" class="form-control"  placeholder="Enter Proffession" name="proffession" autocomplete="off" value="<?php echo $proffession; ?>">
  </div>
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
</html>
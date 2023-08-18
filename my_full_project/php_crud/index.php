<?php 
 require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Member</a>
      </button>
      <table class="table">
  <thead>

      <tr>
        <th scope="col">Sl no:</th>
        <th scope="col">Name</th>
        <th scope="col">Father name</th>
        <th scope="col">Mobile</th>
        <th scope="col">Comment</th>
        <th scope="col">Proffession</th>
        <th scope="col">Operation</th>
      </tr>
 </thead>
      <?php
      $sql="select * from `crud`";
      $result=mysqli_query($con,$sql);
      if ($result) {
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $father_name=$row['father_name'];
          $mobile=$row['mobile'];
          $comment=$row['comment'];
          $proffession=$row['proffession'];

          echo '<tr>
                  <th scope="row">'.$id.'</th>
                  <td>'.$name.'</td>
                  <td>'.$father_name.'</td>
                  <td>'.$mobile.'</td>
                  <td>'.$comment.'</td>
                  <td>'.$proffession.'</td>
                  <td>
                     <button class="btn btn-primary" ><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                     <button class="btn btn-danger" ><a  class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
                 </td>
                </tr>';
        }
      }
 function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;

  }
      ?>
     

  <tbody>
   
  </tbody>
</table>
    </div>
 </body>
</html>
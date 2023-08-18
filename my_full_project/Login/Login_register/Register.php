<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <form method="POST" action="login.php">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label>Name:</label>
      <input type="text" name="name" class="form-control" placeholder="Name" required="" autocomplete="off">
    </div>
    <div class="form-group col-md-2">
      <label>Password:</label>
      <input type="password" name="password" class="form-control"  placeholder="Password" required="">
      </div>
   <div class="form-group col-md-2">
    <label >Mobile:</label>
    <input type="text" name="mobile" class="form-control" placeholder="Mobile" required="" autocomplete="off">
  </div>
   <div class="form-group col-md-4">
    <label>Feedback:</label>
    <input type="comment" name="feedback" class="form-control"  placeholder="Feedback" required="" autocomplete="off">
   </div>
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Sign in</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="div1" >
  <form class="form-inline" method="post" action="login.php">
  <div class="form-group mx-sm-3 mb-2">
    <label>Mobile:</label>
    <input type="text" name="mobile" class="form-control" id="inputPassword2" placeholder="Mobile" autocomplete="off">
  </div>
  <br>
  <div class="form-group mx-sm-3 mb-2">
    <label>Password:</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password" required="">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="loginbtn">Login</button>
</form>
<p> New Here? want to join ? <a href="Register.php">click here to join </a> </p>
</div>
</body>
</html>
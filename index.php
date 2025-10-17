
<?php session_start(); if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html>
<head>   <title>Bataraza Local Cloud Database Management System</title>
<link rel="shortcut icon" href="images/dilglogo.png">   
<link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container">
    <form class="login-form border shadow p-3 rounded" action="php/check-login.php" method="post">
    <h1 class="text-center p-3">ADMIN</h1>
      <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
     
      <?php } ?>
      <div class="mb-3">
        <label for="username" class="form-label">Your username</label>
        <input type="text" class="form-control" name="username" id="username">
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
     
      <div class="mb-1">
      </div>
      <select class="form-select mb-3" name="role" aria-label="Default select example">
        <option value="admin">Admin</option>
      </select> 
      <div class="btn">
                		<div><a href="forgot.php">Forgot password?</a></div>

      <button type="submit" class=" btn-primary">LOGIN</button>
    
    </form>
  </div>
  </div>
      </div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>

<style>
  .login-form {
  background-color: transparent;
  Width: 450px;
  Background-color:rgb(249, 249, 249);
  Padding: 2rem;
  Border-radius: 17px;
  Box-shadow:  rgba(0, 0, 0, 0.1);
  width: 300px;
  background: linear-gradient(#ffffff34, #ffffff27);
  backdrop-filter: blur(7px);
  
}

.login-form .form-label {
  Font-weight: bold;
  display: block;
  Color: black;
  align-content: center;    
}
</style>



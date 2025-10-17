
<?php session_start(); if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html>
<head>   <title>Bataraza Local Cloud Database Management System</title>
<link rel="shortcut icon" href="images/dilglogo.png">   
<link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container">
    
     
      <div class="mb-1">
        <label class=”form-label”>Select User Type:</label>
      </div>
      <select class="form-select mb-3" name="role" aria-label="Default select example">
        <option selected value="user">User</option>
        <option value="admin">Admin</option>
      </select>
      <div class="btn">
      <button type="submit" class=" btn-primary">LOGIN</button>
    </>
  </div>
  </div>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>



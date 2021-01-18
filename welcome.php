<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hello user</title>
</head>
<body>
<h1>Welcome User</h1>
 <div class="row">
             <div class="col-sm-3"> </div>
            <div class="col-sm-4"><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p></div>
          </div>
</body>
</html>
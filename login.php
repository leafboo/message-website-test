<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>You clicked the Log in button</h1> 
  <form action="./login.php" method="post">
    username: <br>
    <input type="text" name="username"> <br>
    password: <br>
    <input type="password" name="password"> <br>
    <input type="submit" name="login" value="Log in">
  </form>
  <div>Don't have an account? <a href="./signup.php">Signup</a></div>
</body>
</html>

<?php
  // action attribute in the form html sends the form data to the specified path
?>
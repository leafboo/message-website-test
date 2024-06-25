<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>You clicked the Sign up button</h1> 
  <form action="./signup.php" method="post">
    username: <br>
    <input type="text" name="username"> <br>
    password: <br>
    <input type="password" name="password"> <br>
    re-enter password: <br>
    <input type="password" name="reEnterPassword"> <br>
    <input type="submit" name="signup" value="Sign up">
  </form>
  <div>Already have an account? <a href="./login.php">Login</a></div>
</body>
</html>

<?php
  // action attribute in the form html sends the form data to the specified path
?>
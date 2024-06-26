<?php
  include("database.php");
?>

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
  // create a new row in database

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // filter username and password

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username) && empty($password)) {
      echo "Please enter a username and password";
    } else if(empty($username)) {
      echo "Please enter a username";
    } else if(empty($password)) {
      echo "Please enter a password";
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user_name, user_password) 
              VALUES ('$username', '$hash')";

      mysqli_query($conn, $sql);
      echo "You have successfully created an account!";
    }
  }

  mysqli_close($conn);
?>
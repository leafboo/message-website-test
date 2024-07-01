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
  // check if the account details is found in the database

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)) {
      echo "Please enter a username";
    } else if(empty($password)) {
      echo "Please enter your password";
    } else {

      $sqlGet = "SELECT * FROM users WHERE user_name = '$username' LIMIT 1";
      $result = mysqli_query($conn, $sqlGet);
      
      if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $dbPassword = $row["user_password"];

        if(password_verify($password, $dbPassword)) {
          header("Location: home-page.php");
          exit();
        } else {
          echo "Passwords do not match!";
        }
      } else {
        echo "Could not find user!";   
      }

    }
    
    
  }
  mysqli_close($conn);
?>
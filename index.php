<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="./index.js" defer></script>
</head>
<body>
  <a href="./home-page.php"><button class="login-button">Log in</button></a>
  <a href="./signup.php"><button class="signup-button">Sign up</button></a>
</body>
</html>



<?php
// REVIEW THIS CODE, IDK HOW IT ALL WORKS
// sanitize removes the undesired shit
// validate returns an empty string if it doesn't pass validation
  session_start();

  if(!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
  }

  if(isset($_POST['submit'])) {
    //$new_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    //$_SESSION['messages'][] = $new_message;
    echo $_POST["message"];
  }

   //echo '<pre>' . print_r($_POST, true) . '</pre>';

   //foreach($_POST as $key=>$value) {
    //echo "{$key} => {$value} <br>";

   //}
  

  //if (!empty($_SESSION['messages'])) {
    //foreach($_SESSION['messages'] as $message) {
      //echo "{$message} <br>";
    //}
  //}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    message: <br>
    <input type="text" name="message">
    <input type="submit" name="submit">
  </form>
</body>
</html>

<?php
// REVIEW THIS CODE, IDK HOW IT ALL WORKS
  session_start();

  if(!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
  }

  if(isset($_POST['submit'])) {
    $new_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['messages'][] = $new_message;
  }

  if (!empty($_SESSION['messages'])) {
    foreach($_SESSION['messages'] as $message) {
      echo "{$message} <br>";
    }
  }
?>
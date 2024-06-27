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
  <form action="home-page.php" method="post">
    Say something... <br>
    <input type="text" name="message">
    <input type="submit" name="submit">
  </form>
</body>
</html>
<?php
   
?>

<?php
  // Used for getting message and displaying
  $sqlGet = "SELECT * FROM messages;";
  $result = mysqli_query($conn, $sqlGet);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)) { // loop every row of the table
      echo "{$row['chat_message']} | {$row['date_time']} <br>";
    }
  } else {
    echo "No chat messages found.";
  }

  // Used for sending message 
  if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["message"])) {
    $message = $_POST["message"]; 
    
    $sqlPost = "INSERT INTO messages (chat_message)
                VALUES ('{$message}');";
    mysqli_query($conn, $sqlPost);
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  } 
  mysqli_close($conn);
?>
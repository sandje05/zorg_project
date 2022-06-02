<?php
session_start();
var_dump($_SESSION['check']);
$checker = $_SESSION["check"];


  if($checker == true){
  $message = "account is aangemaakt";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>console.log('test')</script>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="../inlog/checker.php" method="post">
<input type="text" placeholder="postcode" required>


<input type="submit" value="verder">
    </form>
</body>
</html>
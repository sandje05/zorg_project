<?php

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
<input type="text" placeholder="Naam" required name="naam">
<input type="password" placeholder="Wachtwoord" required name="wachtwoord">


<input type="submit" value="verder">
    </form>
    
<a href="../create/account.php">heb je nog geen account?</a>

</body>
</html>
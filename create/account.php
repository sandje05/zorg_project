<?php
include "../database.php";

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../create/input.php" method="post" required>
<input type="text" placeholder="naam"required name="naam">
<input type="text" placeholder="achternaam" required name="achternaam">
<input type="text" placeholder="wachtwoord" required name="wachtwoord">
<input type="date" placeholder="geboortedatum" required name="date">
<input type="text" placeholder="postcode" required name="postcode">
<input type="text" placeholder="straat" required name="straat">
<input type="submit" value="verder" required>
    </form>
    <a href="../inlog/login.php">heb je al een account?</a>

</body>
</html>
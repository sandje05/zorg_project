<?php
include "../database.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verzoek</title>
    <link rel="stylesheet" href="verzoek.css">
</head>
<body>
    <form action="../verzoek/input.php" method="post">
        <input type="text" placeholder="activiteit" name="activiteit">
        <input type="time" name="tijd" id="tijd" placeholder="tijd">
        <select name="level" id="level">
            <option value="ouder">Ouder</option>
            <option value="vrijwilliger">Vrijwilliger</option>
        </select>
        <input type="submit" value="button">
    </form>
    
</body>
</html>
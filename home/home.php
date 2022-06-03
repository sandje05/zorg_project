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
    <link rel="stylesheet" href="home.css">
</head>
<body>

<div class="profiel">

<h4>Voornaam Achternaam</h4>
<p>geboortedatum <br>
postcode <br>
straatnaam
</p>

</div>

    <form action="../instellingen/instellingen.php" method="post">
    <input type="submit" value="instellingen">
</form>
<div class="vrijwilliger">
<form action="../zoek/vrijwilliger.php" method="post">
    <input type="submit" value="zoek een vrijwilliger">
</form> </div>
<div class="buur">
<form action="../zoek/buur.php" method="post">
    <input type="submit" value="zoek een buur">
</form> </div>
</body>
</html>
<?php
include "../database.php";
session_start();

$naam = $_POST['naam'];
$last_name = $_POST['achternaam'];
$date = $_POST['date'];
$postcode = $_POST['postcode'];
$straat = $_POST['straat'];
$ww = $_POST['wachtwoord'];

$wachtwoord = password_hash($ww, PASSWORD_DEFAULT);


$data = [
    'naam' => $naam,
    'last_name' => $last_name,
    'date' => $date,
    'postcode' => $postcode,
    'straat' => $straat,
    'wachtwoord' => $wachtwoord
  ];

$sql = 'INSERT INTO account(Naam_account, Achternaam_acount, Geboortedatum_account, Postcode_account, Straat_account, Wachtwoord_account	) VALUES(:naam, :last_name, :date, :postcode, :straat, :wachtwoord) ';
$stmt = $connection->prepare($sql);
$stmt->execute($data); 
$F = $stmt->fetch();
$D = true;
$_SESSION["check"] = $D;


 header('location: ../inlog/login.php');
 

?>
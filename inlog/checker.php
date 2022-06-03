<?php 
include '../database.php'; // hier include ik voor database connectie 
session_start();



$stmt = $connection->prepare("SELECT `ID_account`, `Naam_account`, `Achternaam_account`, `Wachtwoord_account`, `Geboortedatum_account`, `Postcode_account`, `Straat_account` FROM account WHERE Naam_account= ?");
$stmt->execute([$_POST['naam']]); //execute om data uit database te halen
$user = $stmt->fetch();

$_SESSION["id"] = $user['ID_account'];
$_SESSION["naam"] = $user['Naam_account'];
$_SESSION["achternaam"] = $user['Achternaam_account'];
$_SESSION["wachtwoord"] = $user['Wachtwoord_account'];
$_SESSION["geboortedatum"] = $user['Geboortedatum_account'];
$_SESSION["postcode"] = $user['Postcode_account'];
$_SESSION["straat"] = $user['Straat_account'];
if ($user && password_verify($_POST['wachtwoord'], $user['Wachtwoord_account'])) //password check doormiddel van password verify 
{  header('location: ../home/home.php');}else{
    header('location: ../inlog/login.php');
}




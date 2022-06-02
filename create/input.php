<?php
include "../database.php";
session_start();

$naam = $_POST['naam'];
$last_name = $_POST['achternaam'];
$date = $_POST['date'];
$postcode = $_POST['postcode'];
$straat = $_POST['straat'];




$data = [
    'naam' => $naam,
    'last_name' => $last_name,
    'date' => $date,
    'postcode' => $postcode,
    'straat' => $straat
  ];

$sql = 'INSERT INTO account(Naam_account, Achternaam_acount, Geboortedatum_account, Postcode_account, Straat_account 	) VALUES(:naam, :last_name, :date, :postcode, :straat) ';
$stmt = $connection->prepare($sql);
$stmt->execute($data); 
$F = $stmt->fetch();
$D = true;
$_SESSION["check"] = $D;

if($stmt->rowCount() != 0){ 
 header('location: ../inlog/login.php');} 
 else{
    header('location: ../create/account.php'); 
 }

?>
<?php
include "../database.php";

session_start();
$level = $_POST['level'];
$tijd = $_POST['tijd'];
$activ = $_POST['activiteit'];
$ID = $_SESSION['id'];
$data = [
    'level' => $level,
    'tijd' => $tijd,
    'activ' => $activ,
    'id' => $ID
  ];

$sql = 'INSERT INTO verzoek(Activiteit_verzoek, Tijd_verzoek, ID_medewerker, Level) VALUES(:activ, :tijd, :id, :level)';
$stmt = $connection->prepare($sql);
$stmt->execute($data); 
$F = $stmt->fetch();


 header('location: ../home/home.php');

?>
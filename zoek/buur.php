<?php
include "../database.php";

session_start();

$level = "ouder";
$data = [
    'level' => $level,
  ];
 

$sql = 'SELECT * FROM verzoek WHERE Level = :level';
$stmt = $connection->prepare($sql);
$stmt->execute($data);


$sl = 'SELECT * FROM verzoek WHERE Level = :level';
$stm = $connection->prepare($sl);
$stm->execute($data);
$d = $stm->fetch();

echo "<h1>zoek een buur</h1><hr>";


while($r = $stmt->fetch()) { 
    echo "<p>de activiteit = " . $r['Activiteit_verzoek'] . "</p >";
    echo "<p>hoelaat = " . $r['Tijd_verzoek'] . "</p> ";
    echo "<p>" . $r['Level'] . "</p>";

    $id = $d['ID_medewerker'];

    $dat = [
        'id' => $id
    ];
    
    $s = 'SELECT * FROM account WHERE ID_account = :id';
    $sm = $connection->prepare($s);
    $sm->execute($dat);
    
    
    while($s = $sm->fetch()) { 
        echo "<p>" ."wie = ". $s['Naam_account'] . " ".$s['Achternaam_account']."<br> </p>";
        echo "<p> Waar = " . $s['Postcode_account']." " .$s['Straat_account']. "</p >";
        ?> <html><form action="../home/home.php" method="post">
            <input type="checkbox" name="id_v" value="<?php echo $r['ID_verzoek']; ?>">
            <input type="submit" value="verder">
        </form></html><?php }
    

    
}
    

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
    
</body>
</html>
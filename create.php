<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, 'root', $dbPass);
    if ($pdo) {
        //   echo "er is iets verbinding met de sql server";
    } else {
        echo "error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

var_dump($_POST);
$sql = "INSERT INTO info (id
                            ,telefoonnummer
                            ,straatnaam
                            ,huisnummer
                            ,woonplaats
                            ,postcode
                            ,landnaam) 
        VALUES               (NULL
                            , :telefoonnummer
                            , :straatnaam
                            , :huisnummer
                            , :woonplaats
                            , :postcode
                            , :landnaam);";


$statement = $pdo->prepare($sql);

$statement->bindValue(':telefoonnummer', $_POST['phonenumber'], PDO::PARAM_STR);
$statement->bindValue(':straatnaam', $_POST['infix'], PDO::PARAM_STR);
$statement->bindValue(':huisnummer', $_POST['Housenumber'], PDO::PARAM_STR);
$statement->bindValue(':woonplaats', $_POST['place'], PDO::PARAM_STR);
$statement->bindValue(':postcode', $_POST['lastname'], PDO::PARAM_STR);
$statement->bindValue(':landnaam', $_POST['country'], PDO::PARAM_STR);


$result = $statement->execute();

if ($result) {
    echo "er is een nieuwe record gemaakt in de database";
    header('Refresh:2; url=read.php');
}else {
    echo "er is een geen nieuwe record gemaakt";
    header('Refresh:200; url=read.php');
}
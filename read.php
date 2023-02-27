<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        echo "de verbinding is gelukt";
    } else {
        echo "Intere server-error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


$sql = "SELECT id
              ,telefoonnummer
              ,straatnaam
              ,huisnummer
              ,woonplaats
              ,postcode
              ,landnaam
         FROM info";

$statement =  $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

//var_dump($result);

$row = "";
foreach ($result as $info) {
    $row .= "<tr>
            <td>$info->id</td>
            <td>$info->telefoonnummer</td>
            <td>$info->straatnaam</td>
            <td>$info->huisnummer</td>
            <td>$info->woonplaats</td>
            <td>$info->postcode</td>
            <td>$info->landnaam</td>

            <td>
                <a href= 'delete.php?id=$info->id'>
                    <img src='img/b_drop.png' alt='kruis'>
                   </a>
                   </td>
                   <td>
                    <a href='update.php?id=$info->id'>
                    <img src='img/b_edit.png' alt='potlood'>
                    </a>
                   </td>
                   </tr>";
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

    <h3>persoongegevens</h3>

    <a href="index.php">
        <input type="button" value="Nieuw record">
    </a>

    <table border="1">
        <thead>
            <th>id</th>
            <th>Voornaam</th>
            <th>tussenvoegsel</th>
            <th>Achternaam</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?= $row ?>
        </tbody>
    </table>

</body>

</html>
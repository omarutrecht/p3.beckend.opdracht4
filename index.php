<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>opdracht4</title>
</head>
<body>
    <h1>bling bling nagel studio chantal</h1>
    <form method="POST" action="create.php">
        <label>Kies 4 basiskleuren voor uw nagels:</label><br>
        <input type="color" name="colora" value="#dc9a31" required>
        <input type="color" name="colorb" value="#35a4cd" required>
        <input type="color" name="colorc" value="#d54bd3" required>
        <input type="color" name="colord" value="#e9eb45" required><br><br>

        <label>Uw telefoonnummer:</label><br>
        <input placeholder="0612345678" type="tel" name="telefoon"required><br>
        
        <label>Uw e-mailadres:</label><br>
        <input placeholder="test@outlook.com" type="email" name="email" required><br>

        <label>Afspraak datum/tijd:</label><br>
        <input type="datetime-local" name="datum" required><br>

        <label>Soort behandeling:</label><br>
        <input type="checkbox" name="treatment1" value="manicure">Manicure<br>
        <input type="checkbox" name="treatment2" value="pedicure">Pedicure<br>
        <input type="checkbox" name="treatment3" value="nail-art">Nail Art<br><br>
        
        <button type="reset" value="sla op">sla op</button>
        <button type="submit" value="Verzenden">Verzenden</button>

        <input type="hidden" name="timestamp" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </button>
    </form>
</body>

</html>
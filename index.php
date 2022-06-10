<?php
//require_once __DIR__ . "/bon-cadeau.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier complémentaire 4 : Bons Cadeaux</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <section id="formSection">
        <form action="bon-cadeau.php" method="POST">
            <label for="amount">Montant du Bon Cadeau :</label>
            <input type="number" name="amount" id="amount">
            <div>
                <label for="firstnameTo">Bénéficiaire :</label>
                <input type="text" name="firstnameTo" id="firstnameTo" placeholder="Prénom">
                <input type="text" name="lastnameTo" id="lastnameTo" placeholder="Nom">
            </div>
            <div>
                <label for="firstnameFrom">De la part de :</label>
                <input type="text" name="firstnameFrom" id="firstnameFrom" placeholder="Prénom">
                <input type="text" name="lastnameFrom" id="lastnameFrom" placeholder="Nom">
            </div>

            <input type="submit" value="valider">

        </form>
    </section>

</body>

</html>
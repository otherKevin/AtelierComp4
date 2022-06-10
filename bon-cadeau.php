<?php

require_once __DIR__ . "/class/BonCadeau.class.php";


/* Traitement de la requête si le verbe HTTP est POST */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Récupération des valeurs du body de la requête */
    $amount = $_POST["amount"];
    $firstnameTo = $_POST["firstnameTo"];
    $lastnameTo = $_POST["lastnameTo"];
    $firstnameFrom = $_POST["firstnameFrom"];
    $lastnameFrom = $_POST["lastnameFrom"];

    /* Création d'une instance de BonCadeau avec les valeurs issues du formulaire */
    $newBonCadeau = new BonCadeau($amount, $firstnameTo, $lastnameTo, $firstnameFrom, $lastnameFrom);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">

    <title>Atelier Complémentaire 4 : Bon Cadeau page2</title>
</head>

<body>

    <section>
        <h1>Affichage du bon créé : </h1><br>
        <?php
        $newBonCadeau->displayGift();
        ?>
    </section>


    <section>
        <h1>Test de validité du bon créé :</h1>
        <?php
        $newBonCadeau->validityCheck();
        ?>
    </section>

</body>

</html>
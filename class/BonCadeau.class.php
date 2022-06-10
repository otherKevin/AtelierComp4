<?php



// ------------------------- Création de la classe BonCadeau :

class BonCadeau
{
    protected float $amount;
    protected string $firstnameTo;
    protected string $laststnameTo;
    protected string $firstnameFrom;
    protected string $laststnameFrom;
    protected string $giftNmbr;
    protected string $giftExp;
    protected int $giftExpUnix;


    public function __construct($amount, $firstnameTo, $laststnameTo, $firstnameFrom, $laststnameFrom)
    {
        $this->amount = $amount;
        $this->firstnameTo = $firstnameTo;
        $this->laststnameTo = $laststnameTo;
        $this->firstnameFrom = $firstnameFrom;
        $this->laststnameFrom = $laststnameFrom;

        // ------------------------ Définition du fuseau horaire :
        date_default_timezone_set('Europe/Paris');

        // ------------------------- Variables d'obtention de la date :
        $buyingUnixDate = date('U');    // Date "unix", pour comparaisons absolues
        $buyingDateForID = date('m-Y'); // Date au format "06-22" (ici pour Juin 2022) en vue de création de l'ID du bon

        // ------------------------- Variable contenant un nombre aléatoire :
        $randomNmbrDimension = 2;   // Dimension du nombre aléatoire  (ici 2 chiffres)
        $randomNmbr = str_pad(rand(0, pow(10, $randomNmbrDimension) - 1), $randomNmbrDimension, '0', STR_PAD_LEFT); // Obtention d'un entier aléatoire sur 2 chiffres

        $this->giftNmbr = $buyingDateForID . "-" . $randomNmbr;
        $this->giftExp = date('j-M-Y', strtotime('+1 year'));
        $this->giftExpUnix = (int)date('U', strtotime('+1 year'));
    }

    public function displayGift()
    {
?>

        <div class="divBonCadeau">
            <h2>Bon Cadeau n° <?= $this->giftNmbr ?></h2>
            <h3>Montant du Bon : <?= $this->amount ?> €</h3>
            <p>Pour <?= $this->firstnameTo . " " .  $this->laststnameTo ?></p>
            <p>Valable jusqu'au : <?= $this->giftExp ?> </p>
        </div>

<?php }

    public function validityCheck()
    {
        if ($this->giftExpUnix - (int)date('U') > 0) {
            echo "Le bon est toujours valide. Il expirera le " . $this->giftExp;
        } else {
            echo "Le bon cadeau n'est plus valable. Il était valable jusqu'au " . $this->giftExp . "Navré. Vous pouvez contacter le service client pour réclamation.";
        }
    }
}

<?php
class Voiture {
    // public string $couleur;
    // public int $vitesse;


    public function __construct(
        public string $couleur = "Blanche",
        public int $vitesse = 0
    ) {}
    // public function __construct(string $couleur = "Blanche", int $vitesse = 0) {
    //     $this->couleur = $couleur;
    //     $this->vitesse = $vitesse;
    // }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();               // valeurs par défaut
$v2 = new Voiture("Rouge", 50);    // valeurs personnalisées
$v1->afficher();
$v2->afficher();
$v3 = new Voiture("Noire");  
$v3->afficher();
$v4 = new Voiture(120);  
$v4->afficher();
?>
<?php
echo"<br><br>" ;
class Voiture2 {
    public function __construct(public string $couleur) {
        echo "Voiture {$this->couleur} créée." . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

$maVoiture = new Voiture2("Blanche");
// unset($maVoiture);          // appelle __destruct()
echo "Fin du script." . PHP_EOL;
$a = new Voiture2("Bleux");
echo "Fin du script." . PHP_EOL;
$b = new Voiture2("noir");
echo "Fin du script." . PHP_EOL;

?>

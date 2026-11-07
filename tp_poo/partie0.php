<?php
class Voiture {
    public $marque;
    public $couleur;

    public function setMarque($m) {
        $this->marque = $m;      // $this = l'objet qui appelle la méthode
    }
    public function setCouleur($c) {
        $this->couleur =$c;
    }

    public function afficher() {
        echo "Marque : " . $this->marque . PHP_EOL;
        echo "Couleur : " . $this->couleur . PHP_EOL;
    }
}

$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->afficher(); 

$v1 = new Voiture();
$v1->setMarque("Renault");
$v1->afficher(); 

?>
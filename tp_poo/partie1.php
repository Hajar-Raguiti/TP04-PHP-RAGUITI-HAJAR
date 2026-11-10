<?php
class Personne {

    // ----- Attributs publics -----
    public string $nom;
    public string $prenom;

    // ----- Attributs privés -----
    private string $dateNaissance;   // format "AAAA-MM-JJ"
    private string $villeNaissance;
    private string $cin;

    // ----- Constructeur -----
    // public function __construct(
    //     string $nom,
    //     string $prenom,
    //     string $dateNaissance,
    //     string $villeNaissance,
    //     string $cin
    // ) {
    //     $this->nom = $nom ;
    //     $this->prenom = $prenom ;
    //     $this->dateNaissance = $dateNaissance ;
    //     $this->villeNaissance = $villeNaissance ;
    //     $this->cin = $cin ;

    // }
    // 2.2 Le piège des deux constructeurs :
    // public function __construct() {
    //     echo "Création " . __CLASS__ . PHP_EOL;
    // }

    // public function __construct(string $nom, string $prenom) {
    //     $this->nom = $nom;
    //     $this->prenom = $prenom;
    // }
    //->proposistion
    public function __construct(string $nom = null, string $prenom = null) {
        if ($nom !== null && $prenom !== null) {
            $this->nom = $nom ;
            $this->prenom = $prenom ;
        }
        else {
            echo "Création " . __CLASS__ . PHP_EOL;
        }
        
    }


    // ----- Méthode publique -----
    public function getName(): string {
        return $this->prenom . " " . $this->nom ;
    }

    // ----- Méthode privée -----
    private function getAge(): int {
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        return $naissance->diff($aujourdhui)->y;
    }
    public function __destruct() {
        echo "Détrruire".__CLASS__ . PHP_EOL;
    }
}
###Programme de test 
$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p->getName() . PHP_EOL;   //résultat :Sara Hachimi
echo $p->nom . PHP_EOL;
###### Expérimentation
echo $p->cin;// Erreur : Cannot access private property Personne::$cin
echo $p->dateNaissance;//Erreur : Cannot access private property Personne::$dateNaissance
echo $p->getAge();// Erreur :Call to private method Personne::getAge() from global scope 
?>
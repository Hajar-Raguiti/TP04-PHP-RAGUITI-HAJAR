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
    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $villeNaissance,
        string $cin
    ) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->dateNaissance = $dateNaissance ;
        $this->villeNaissance = $villeNaissance ;
        $this->cin = $cin ;}
    // }
    // public function __construct(string $nom = null, string $prenom = null) {
    //     if ($nom !== null && $prenom !== null) {
    //         $this->nom = $nom ;
    //         $this->prenom = $prenom ;
    //     }
    //     else {
    //         echo "Création " . __CLASS__ . PHP_EOL;
    //     }
        
    // }

    // ----- Méthode privée -----
    private function getAge(): int {
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        return $naissance->diff($aujourdhui)->y;
    }
    public function __toString(): string {
        return $this->prenom." ".$this->nom.$this->getAge()."ans";
    }
    public function __destruct() {
        echo "Détrruire".__CLASS__ . PHP_EOL;
    }


}
###Programme de test 
$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p;
?>
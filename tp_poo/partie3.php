<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";

    public function __set(string $name, mixed $value): void {
        
        if($name ==='nom'){
            if (empty($value)|| strlen($value)<2) {
                throw new InvalidArgumentException("Le nom ne doit pas etre vide , et doit centenir au moin 2 caractéres .");
            }
        }
        if (property_exists($this, $name)){
            $this->$name = $value ;
        }
        else {
            echo "Propriété $name inexistante";
        }
    }

    public function __get(string $name): mixed {
        if (property_exists($this, $name)){
            return $this->$name ;
        }
        else {
            return null; 
        }
    }

    public function __isset(string $name): bool {
        return isset($this->$name) ;
    }

    public function __unset(string $name): void {
        if (property_exists($this, $name)){
            $this->$name = "" ;
        }
    }
}

$p = new Personne();
$p->nom = "Hachimi";             // → __set
echo $p->nom . PHP_EOL;         // → __get
var_dump(isset($p->nom));       // → __isset
unset($p->nom);                 // → __unset
var_dump(isset($p->nom));
$p->telephone = "0600000000";   // La méthode __set est appelé , verifi l'inexistance et affiche le message .
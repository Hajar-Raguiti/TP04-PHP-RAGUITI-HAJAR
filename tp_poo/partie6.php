<?php
//### 6.1 Découverte avec `Animal` et `Chien`
class Animal {
    public function manger(): void {
        echo "Je mange." . PHP_EOL;
    }
}

class Chien extends Animal {
    public function aboyer(): void {
        echo "Wouf !" . PHP_EOL;
    }
}
class Chat extends Animal {
    public function miauler(): void {
        echo "Meow !" . PHP_EOL;
    }
}

$c = new Chien();
$c->manger();    // héritée d'Animal
$c->aboyer();    // propre à Chien

### 6.2 `parent::` et redéfinition de méthode
class Personne {
    public function __construct(protected string $nom) {}

    public function presentation(): string {
        return "Je suis " . $this->nom;
    }

    private function getAge(): int{
        return $this->age;
    }
}

class Etudiant extends Personne {
    public function __construct(string $nom, private string $filiere) {
        parent::__construct($nom);   // appelle le constructeur du parent
    }

    public function presentation(): string {
        return parent::presentation() . ", étudiant en " . $this->filiere;
    }
}

$e = new Etudiant("Ahmed", "Informatique");
echo $e->presentation() . PHP_EOL;

//### 6.3 `final` et `readonly`
class Base {
    final public function afficher(): void {
        echo "Méthode finale" . PHP_EOL;
    }
}
// class Fille extends Base {
//     Public function afficher(): void {
//         echo "Aprés Méthode final.";
//     }
// }
final class Outil {
    public const VERSION = "1.0";
}

// class SousOutil extends Outil {
// }

class Produit {
    public function __construct(public readonly string $reference) {}
}

$p = new Produit("REF-001");
echo $p->reference . PHP_EOL;
// $p->reference = "REF-002";


//### 6.4 Exercice principal : `Etudiant extends Personne`
class Etudiant extends Personne {
    private string $cne;

    public function __construct(string $nom , string $cne) {
        parent::__construct($nom);
        $this->cne = $cne ;
    }

    public function getCne(): string {
        return $this->cne;
    }

    public function __toString(): string {
        return parent::presentation() . " CNE : ". $this->cne;
    }
}

$etudiants = [];
$etudiants[] = new Etudient("Hajar","E001");
$etudiants[] = new Etudient("Hajar2","E002");
$etudiants[] = new Etudient("Hajar3","E003");
$etudiants[] = new Etudient("Hajar4","E004");
$etudiants[] = new Etudient("Hajar5","E005");
foreach ($etudiants as $e) {
    echo $e . PHP_EOL;
}
?>
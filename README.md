# TP04-PHP-RAGUITI-HAJAR
TP 02 PHP — Programmation Web 2 — 2026/2027
### Partie 0 : 
|**0.3**  `$v1` et `$v2` partagent-ils la même valeur de `$marque` ? Pourquoi ?
Rep : Non , chaque objet a son propre propriétés et methodes qui son appelé par `$this`
### Partie 1 : 
|**1.1**  Que remarquez-vous ? Quelle ligne provoque quelle erreur ?
**Reponse :** les lignes d'affichage qui'ont provoqué l'errur d'inaccessibilité puisque les instances appelé sont privé.
|

|**1.2**  Pourquoi serait-il dangereux de laisser `cin` en `public` ?
**Reponse :** cela va donner la permission aux autres class de modifier le 'cin', c'est pour cette raison on utilise l'encapsulation.
|

|**1.3**  `getAge()` est privée : est-elle donc inutile ? Comment pourrait-elle être utilisée par une autre méthode de la classe ? *(gardez cette idée pour la Partie 4)*
**Reponse :**  Non , il est utile, une methode de meme class peut l'appelé , par exemple une methode 'afficher()'
|

|**1.4**  Changez la visibilité de `cin` en `protected`. Le comportement depuis l'extérieur change-t-il ?
**Reponse :**  non , un message de 'Uncaught Error: Cannot access protected property Personne::$cin ' s'affiche encor
|

### Partie 2 : 
|- [ ] **2.1.a** Que se passe-t-il avec `new Voiture("Noire")` ? Et `new Voiture(120)` ? Testez (attention au typage !).
**Reponse :**  les arguments sont affectée directement  au premier paramètre, donc , le meme pour '120'.
- [ ] **2.1.b** Réécrivez le constructeur avec la **promotion de propriétés** :Quel est l'avantage de cette écriture ? 
**Reponse :**  reduction du code , ouisque la declaraion et l'affectaion se fait directement dans mem fonction
|

|- [ ] **2.2.a** Que remarquez-vous à l'exécution ? Pourquoi ?
**Reponse :**  'Fatal error:Cannot redeclare Personne::__construct() '
php n'accept pas olus d'une declaration de constructeur 
- [ ] **2.2.b** Proposez **une solution** pour obtenir les deux comportements (création « vide » et création avec informations) avec **un seul** constructeur. *(Indice : valeurs par défaut.)*
**Reponse :** les paramètres prend  valeur par defaut  null , avec une condition (non par defaut) , on le parametre prend l'argument saisis  
- [ ] **2.2.c** *Bonus :* cherchez ce qu'est une **méthode statique de fabrique** (*named constructor*), par exemple `Personne::depuisTableau(array $data)`.
**Reponse :** fonction prend les données de format tableux et creer l'objet |

|- [ ] **2.3.a**  Dans quel ordre les trois messages s'affichent-ils ?
**Reponse :**Voiture Blanche créée. Voiture Blanche détruite. Fin du script.
- [ ] **2.3.b**  Supprimez la ligne `unset(...)`. Que change-t-il dans l'ordre des messages ?
**Reponse :**le message de distruct s'affiche à la fin
- [ ] **2.3.c** Créez deux objets `$a` et `$b`, sans `unset`. Dans quel ordre sont-ils détruits à la fin du script ? 
**Reponse :** l'ordre inverse de la declaration .
- [ ] **2.3.d** Ajoutez dans `Personne` un destructeur affichant « Détruire `nom_class` » (utilisez `__CLASS__`) puis testez votre programme.
 |
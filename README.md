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

### Partie 3 : 
|- [ ] **3.1** Complétez les quatre méthodes et vérifiez les résultats attendus.
**Reponse :** resultat : Hachimi; bool(true); bool(true); Propriété telephone inexistante
- [ ] **3.2**  Sans `__set`, que se passerait-il en écrivant `$p->nom = "X"` si `nom` est `private` ? Et avec `__set` ?
**Reponse :**Sans `__set` le php declenche un fatal erreur car la permisson est non accordé pour modifier directement la propriété .
avec `__set` php execute le methode magique __set().
- [ ] **3.3**  `__set` peut-il casser l'encapsulation ? Que faire pour **valider** la valeur (ex. refuser un `nom` vide) ?
**Reponse :**  oui, la surchage magique via __set et __get donne l'accée sous forme d'attributs publics virtuel, ce qui permet de casser l'encapsulation. 
- [ ] **3.4** Dans `__set`, ajoutez une validation : le nom ne doit pas être vide et doit contenir au moins 2 caractères (`strlen`). Sinon, lancez `throw new InvalidArgumentException("...")`.|

### Partie 4 : 
|- [ ] **4.1**  `getAge()` est `private`, pourtant elle fonctionne ici. Pourquoi ? (cf. question 1.3)
**Reponse :** oui, puisque une method de mem class peut l'appelé , ici le méthode `__toString()` a l'accée de cette propriété .
- [ ] **4.2** Que se passe-t-il si `__toString()` retourne un entier au lieu d'une chaîne ? Testez.
**Reponse :** 
- [ ] **4.3** *Bonus :* c'est quoi l'intérêt de `__toString()` par rapport à `getName()` ? Listez deux situations où il est pratique.
**Reponse :**  l'intérêt  est de permet de convertir en texte automatiquement .|

### Partie 5 : 
|- [ ] **5.1** Exécutez et observez la chaîne sérialisée. Le mot de passe y figure-t-il ?
**Reponse :** mdp ne s'affiche pas .
- [ ] **5.2**  Mettez `__serialize()` en commentaire et relancez. Que constatez-vous dans la chaîne ? Quel risque cela représente-t-il ?
**Reponse :** il ya l'affichage : '"UtilisateurmotDePasse";s:9:"secret123"' donc on risque d'exposer l emdp au public .
- [ ] **5.3**  Après `unserialize`, quelle est la valeur de `$motDePasse` ? Que faudrait-il prévoir dans une vraie application ?
**Reponse :** on a observé que dans l'affichage :["motDePasse":"Utilisateur":private]=> string(0) "" , la valeur de mdp est une chaine vide.
- [ ] **5.4**  **Réflexion sécurité :** pourquoi ne faut-il **jamais** appeler `unserialize()` sur des données provenant de l'utilisateur (cookie, formulaire…) ? Cherchez le terme *PHP Object Injection*. Quelle alternative utiliser pour échanger des données (indice : `json_encode` / `json_decode`) ?
**Reponse :**car ce permet a l'attaquant de manipuler la chain pour injecter des objets malveillants si les données passé par la serialisation sont mal serialisé. alternative utiliser: il est recommandé d'utiliser les fonctions json_encode et json_decode .|
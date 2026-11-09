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
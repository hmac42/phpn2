<?php

$q = "<h3>Exercice 5 - Conjugaison</h3> 

Enoncé :<br>
* Créez une fonction qui prend une string en paramètre. Ce paramètre sera un verbe régulier du premier groupe<br>
 (finissant par 'er' tels que parler, trier, chanter, coder, programmer, ...). Votre fonction doit conjuguer ce verbe<br>
  au présent de l'indicatif et l'afficher à l'écran.<br>

# Contrainte<br>
* La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.<br>
* Vérifiez que la chaîne passée en paramètre se termine bien par 'er'.<br>

Exemple :<br>

En entrée : 'programmer'<br>


En sortie :<br> 

je programme<br>
tu programmes<br>
il programme<br>
nous programmons<br>
vous programmez<br>
ils programment<br>

Réfléchissez bien à la manière dont vous allez vous y prendre ! Vous pouvez notamment :<br>
- supprimer des bouts de chaines de caractères<br>
- concaténer (rajouter à la fin) de nouvelles chaines<br>
- remplacer un bout de chaine par un autre<br>
... une fois que vous savez comment vous allez vous y prendre, recherchez s'il n'existe pas déjà des fonctions toute prêtes en PHP<br>
 pouvant vous aider.<br>

Testez ensuite votre code sur de nombreux verbes pour vous assurer que ça fonctionne bien.<br>

Pour aller plus loin :<br>
* Essayez de prendre en compte les verbes demandant des traitements particuliers tels que 'manger'.<br>";
echo $q;

$r = "<h3>Resolution</h3>";
echo $r;

function conjVerbe($verbe) {
    $inf ="er";
    $conj = array("e", "es", "e", "ons", "ez","ent");
    $conjger = array('e', 'es', 'e', 'ions', 'iez', 'ent' );
    $persons = array("Je", "Tu", "Il", "Nous", "Vous", "Ils");

   if (preg_match("/ger\Z/", $verbe)){
    for($i=0;$i<=count($conj)-1;$i++){
     $verbeConj = str_replace($inf, $conjger[$i], $verbe);
      echo $persons[$i]." ".$verbeConj."<br>";
    }
    } 
    else if (preg_match("/er\Z/", $verbe)){
    for($i=0;$i<=count($conjger)-1;$i++){
    $verbeConj = str_replace($inf, $conj[$i], $verbe);
    echo $persons[$i]." ".$verbeConj."<br>";
    }
    }
    }

//$verbe = "commencer"; 
echo conjVerbe("manger");


?>
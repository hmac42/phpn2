<?php
$q1 = "<h2>Question 1</h2>
<p>Créez une fonction PHP qui prend comme argument n'importe quel nombre entier supérieur à zéro (faîtes les tests nécessaires pour garantir la validité de l'argument).<br>

Tant que ce nombre est différent de 1 :<br> 
* S'il est pair divisez-le par 2.<br>
* S'il est impair multipliez-le par 3 et ajoutez 1.<br> 

Au final votre fonction doit afficher une série de nombres, le dernier de ces nombres doit être obligatoirement 1. La fonction réalisera des 'echo' de chaque étape intermédiaire.<br>

Exemple :<br>
Valeur de départ : 25<br>
 
Affichage attendu :<br>
25 76 38 19 58 29 88 44 22 11 34 17 52 26 13 40 20 10 5 16 8 4 2 1<br>
</p><br>";

$r = "<h3>Resolution</h3>";
echo $q1;
echo $r;

function problmSyracuse($nmr){
    echo $nmr;
    while(is_int($nmr) && $nmr > 1){
        //is_int() verifie si le numero est entier

        if($nmr%2 == 0){ //modulo qui devise numero par 2 et verifie si le reste est bien 0, donc est numero est pair
           $nmr =  $nmr/2;
        }

       else { $nmr = $nmr * 3 + 1; }
        echo " ".$nmr;
        }
        }
$nmr = 25;
echo problmSyracuse($nmr);
?>
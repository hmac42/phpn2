<?php
$q="<h3>Question1</h3>
<p>Enoncé<br>
Créez une fonction qui prend un paramètre de type entier, cela déterminera la hauteur (en lignes) d'un triangle isocèle rempli d'étoiles qu'il faudra afficher à l'écran.<br>
 Le sommet du triangle sera toujours constitué de 2 étoiles comme dans l'exemple ci-dessous.

Exemple
display_triangle(10) ;

Produira le résultat suivant :<br>


             **<br>
            ****<br>
           ******<br>
          ********<br>
         **********<br>
        ************<br>
       **************<br>
      ****************<br>
     ******************<br>
    ********************<br>

Le triangle fait 10 lignes de haut. Vous trouverez comment faire pour que le résultat s'affiche bien comme ça en HTML.</p>";
$r = "<h3>Resolution</h3>";
echo $q;
echo $r;

//http://www.expertphp.in/article/how-to-make-the-star-triangle-in-php

        $m=1;
        for($i=0; $i<=10; $i++) { // determine le nombre de lignes
            for($j=$i; $j<=9; $j++) {
                echo "&nbsp;&nbsp"; //&nbsp c'est l'entité html de l'espace
            }
            for($k=2; $k<=$m; $k++)  {
                echo "*";
            }
            for($c=$m; $c>1; $c--) {
                echo "*";
            }
            echo "<br>";
            $m++;
        }
?>
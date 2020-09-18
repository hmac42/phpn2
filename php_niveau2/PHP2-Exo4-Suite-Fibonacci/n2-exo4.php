<?php
$q = "<h3>Question</h3>
<p><h4>La suite Fibonacci</h4><br>

<h5>Leonardo Pisano (Fibonacci) (1175 - 1250)</h5><br>

Enoncé tiré de l'ouvrage Liber Abaci de Leonardo Pisano écrit en 1202.<br>

« Possédant initialement un couple de lapins, combien de couples obtient-on en douze mois si chaque couple engendre tous les mois <br>
un nouveau couple à compter du second mois de son existence ? »_
En d'autres termes : la suite de Fibonacci est une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le <br>
précèdent. Elle commence par les termes 0 et 1 et ses premiers termes sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, etc<br>
Creez donc une fonction qui prend un paramètre de type entier, cela correspondra à la durée en mois de la reproduction des lapins, <br>
votre fonction doit retourner le nombre de couples que vous afficherez à l'aide d'un echo.<br>
Pour comprendre, de manière imagée, le fonctionnement de la suite de Fibonacci avec la reproduction des lapins, vous pouvez consulter <br>
l'image fournie dans le dossier.<br>

Exemple<br>

fibonacci(12) ;<br>

Devra afficher le résultat suivant : 144<br>


Pour aller plus loin :<br>

* Renseignez-vous sur le principe de récursivité et essayez de programmer une seconde version de la fonction de calcul de la <br>
suite de Fibonacci de manière récursive.<br>

* Culture : Cette suite est fortement liée au nombre d'or, φ (phi). Ce nombre intervient dans l'expression du terme général de la suite. <br>
Inversement, la suite de Fibonacci intervient dans l'écriture des réduites de l'expression de φ en fraction continue :<br>
 les quotients de deux termes consécutifs de la suite de Fibonacci sont les meilleures approximations du nombre d'or. Et plus on tend vers l'infini, <br>
 plus l'approximation sera précise. Amusez-vous à calculer ce quotient (valeur au rang n / valeur au rang (n-1)) sur plusieurs valeurs pour constater cette approximation.</p><br>";
 echo $q;

 $r = "<h3>Resolution</h3>";
 echo $r;
?>
<?php
$q2 = '<h3>Question</h3>
<p>Exercice n°2 PHP : Inverser une chaîne de caractères<br>
Créez une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine de caractères mais exactement inversée. Vous afficherez le résultat à l\'aide d\'un echo pour contrôler.<br> 

Exemple :<br>
reverse_string("abcdef GHI") ;<br>

doit afficher "IHG fedcba" ;<br>

Indications:<br>
- Vous pouvez parcourir la première chaine de caractères et concaténer les caractères lus "à gauche" de la nouvelle chaine de caractères<br>
- Ou alors vous pouvez parcourir la première chaine "à l\'envers" (en partant de la fin) et construire la nouvelle chaine en concaténant normalement les caractères lus.<br></p>';
echo $q2;

$r = "<h3>Resolution</h3>";
$r1 = "<h3>Resolution 1</h3>";
echo $r;
function renverserChaine($chn) {
    return strrev($chn);
}
$chn = "abcdef GHI";
echo renverserChaine($chn);

echo $r1;
function renverserChaine1($chn) {
    $longchn = strlen($chn); //variable qui capte le nombre de caracteres en utilisant strlen
    $nvlchn = "";
    for($i=$longchn-1;$i>=0; $i--) { // -1 est important.. a voir pourquoi!!!
        $car=$chn[$i];
        $nvlchn .=$car;
        }
        return $nvlchn;
}

echo renverserChaine1($chn);
/*for ($i = 10; $i >= 0; $i--) {
    echo $i;
}*/




?>
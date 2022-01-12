<?php


/*****************************************/
/********** Les boucles : While **********/
/*****************************************/
$nombreMouton = 1;
echo "1.Je vais compter les moutons pour dormir : <br>";
while ($nombreMouton <= 5) {
    echo $nombreMouton . " mouton(s) <br>";
    $nombreMouton++;
}
echo "Je dors enfin...<br><br>";

//-----------------------------------------
//Une autre façon d'utiliser la boucle while
$nombreMouton = 1;
$dormir = false;
echo "2.Je vais compter les moutons pour dormir : <br>";
while ($dormir === false) {
    echo $nombreMouton . " mouton(s) <br>";
    $nombreMouton++;
    if ($nombreMouton > 5) {
        $dormir = true;
    }
}
echo "Je dors enfin...<br><br>";


/**
 * Utililisez les deux exemples en haut pour compter 25 vaches.
 */


// TODO Votre code ici !

$nombreMeuhMeuh = 1;
echo "1.Je vais compter les MeuhMeuh pour dormir : <br>";
while ($nombreMeuhMeuh <= 25) {
    echo $nombreMeuhMeuh . " MeuhMeuh <br>";
    $nombreMeuhMeuh++;
}
echo "Je dors enfin...<br><br>";


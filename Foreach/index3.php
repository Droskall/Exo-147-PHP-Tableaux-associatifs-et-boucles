<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici

foreach ($videotheque as $film) {
    foreach ($film as $infoLabel => $info) {
        if ($infoLabel === 'acteurs') {
            echo "Acteurs : ".implode(", ",$info);
        }
        else{
            echo $infoLabel." : ".$info."<br>";
        }
    }
    echo "<br><br>";
}


//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici

$videotheque[] = array(
    'nom' => 'movie 1',
    'date' => 2000,
    'realisateur' => 'realisateur 1',
    'acteurs' => array(
        'acteur 1','acteur 2','acteur 3',
    ),
    "synopsis" => "synopsys numero 1",
);
$videotheque[] = array(
    'nom' => 'movie 2',
    'date' => 2000,
    'realisateur' => 'realisateur 2',
    'acteurs' => array(
        'acteur 1','acteur 2','acteur 3',
    ),
    "synopsis" => "synopsys numero 2",
);
$videotheque[] = array(
    'nom' => 'movie 3',
    'date' => 2000,
    'realisateur' => 'realisateur 3',
    'acteurs' => array(
        'acteur 1','acteur 2','acteur 3',
    ),
    "synopsis" => "synopsys numero 3",
);

printArray($videotheque);


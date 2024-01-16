<?php








$stringList = file_get_contents('./json/album.json');


header('Content-Type: application/json');
echo $stringList;



















/*se invece volessimo non richimarlo da json e lavorare su questo file basta eliminare il file json e decommentare i dati qui sotto */ 




/*$albums = [
    [
        "image" => "./img/ACDC.jpg",
        "title" => "Highway to Hell",
        "artist" => "ACDC",
        "year" => 1979
    ],
    [
        "image" => "./img/luciodalla.jpeg",
        "title" => "Dalla",
        "artist" => "Lucio Dalla",
        "year" => 1980
    ],
    [
        "image" => "./img/MikiMatsubara.jpg",
        "title" => "Stay With Me",
        "artist" => "Miki Matsubara",
        "year" => 1980
    ],
    [
        "image" => "./img/paranoid-bs.jpg",
        "title" => "Paranoid",
        "artist" => "Black Sabbath",
        "year" => 1970
    ],
    [
        "image" => "./img/sciò-pinodaniele.jpg",
        "title" => "Sciò",
        "artist" => "Pino Daniele",
        "year" => 1984
    ],
    [
        "image" => "./img/vascorossi.jpg",
        "title" => "Cosa succede in città",
        "artist" => "Vasco Rossi",
        "year" => 1985
    ]
];*/
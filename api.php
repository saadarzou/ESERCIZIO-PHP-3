  <?php

    $dischi = [
    [
        "titolo" => "Baby",
        "artista" => "Justin Bieber",
        "genere" => "POP",
        "anno" => 2010,
        "poster" => "immagini/Babycoverart.jpg"
    ],

    [
        "titolo" => "Nothin' on You",
        "artista" => "B.O.B",
        "genere" => "POP",
        "anno" => 2010,
        "poster" => "immagini/artworks-000113211701-xvdmqp-t500x500.jpg"
        
    ],
 
    [
        "titolo" => "A man without Love",
        "artista" => "Engelbrt humperdinck",
        "genere" => "POP",
        "anno" => 1968,
        "poster" => "immagini/copertina.jpg"
    ],

    [
        "titolo" => "21 Qquestion",
        "artista" => "50cent",
        "genere" => "Rap",
        "anno" => 2003,
        "poster" => "immagini/question.jpg"
    ],

    [
        "titolo" => "Crazy story",
        "artista" => "King Von",
        "genere" => "Rap",
        "anno" => 2019,
        "poster" => "immagini/images.jpg"
    ],

     [
        "titolo" => "Humble",
        "artista" => "Kendrik Lamar",
        "genere" => "Rap",
        "anno" => 2017,
        "poster" => "immagini/humble kendrik lamar.jpg"
    ],

     [
        "titolo" => "No Pole",
        "artista" => "Don Toliver",
        "genere" => "Rap",
        "anno" => 2025,
        "poster" => "immagini/Nopole.jpg"
    ],

     [
        "titolo" => "Pink + White",
        "artista" => "Frank Ocean",
        "genere" => "R&B",
        "anno" => 2016,
        "poster" => "immagini/Frankocean.jpg"
    ],

     [
        "titolo" => "Right Now",
        "artista" => "Akon",
        "genere" => "R&B",
        "anno" => 2008,
        "poster" => "immagini/akon right nowù.jpg"
    ],

    [
        "titolo" => "lights out",
        "artista" => "Chris Brown",
        "genere" => "R&B",
        "anno" => 2015,
        "poster" => "immagini/lights out.jpg"
    ]
];

$genereScelto="tutte";

if(isset($_GET["genere"])){
    $genereScelto=$_GET["genere"];
    var_dump($genereScelto);
}

$stessoGenere = [];

for($i=0;$i < count($dischi); $i++){

    if($genereScelto=="tutte"){
        $stessoGenere[] = $dischi[$i];
    } elseif ($genereScelto  == $dischi[$i]["genere"]){
        $stessoGenere[] = $dischi[$i];
    }

}


header("Content-Type: application/json");
$risultato=json_encode($stessoGenere);
echo $risultato;








?>
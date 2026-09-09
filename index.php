<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $dischi = [
    [
        "titolo" => "Baby",
        "artista" => "Justin Bieber",
        "genere" => "POP",
        "anno" => 2010,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\Babycoverart.jpg"
    ],

    [
        "titolo" => "Nothin' on You",
        "artista" => "B.O.B",
        "genere" => "POP",
        "anno" => 2010,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\artworks-000113211701-xvdmqp-t500x500.jpg"
    ],

    [
        "titolo" => "A man without Love",
        "artista" => "Engelbrt humperdinck",
        "genere" => "POP",
        "anno" => 1968,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\copertina.jpg"
    ],

    [
        "titolo" => "21 Qquestion",
        "artista" => "50cent",
        "genere" => "Rap",
        "anno" => 2003,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\21 question.jpg"
    ],

    [
        "titolo" => "Crazy story",
        "artista" => "King Von",
        "genere" => "Rap",
        "anno" => 2019,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\images.jpg"
    ],

     [
        "titolo" => "Humble",
        "artista" => "Kendrik Lamar",
        "genere" => "Rap",
        "anno" => 2017,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\humble kendrik lamar.jpg"
    ],

     [
        "titolo" => "No Pole",
        "artista" => "Don Toliver",
        "genere" => "Rap",
        "anno" => 2025,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\nopole.jpg"
    ],

     [
        "titolo" => "Pink + White",
        "artista" => "Frank Ocean",
        "genere" => "R&B",
        "anno" => 2016,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\frank ocean.jpg"
    ],

     [
        "titolo" => "Right Now",
        "artista" => "Akon",
        "genere" => "R&B",
        "anno" => 2008,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\akon right nowù.jpg"
    ],

    [
        "titolo" => "lights out",
        "artista" => "Chris Brown",
        "genere" => "R&B",
        "anno" => 2015,
        "poster" => "C:\laragon\www\ES 3 PHP\ESERCIZIO-PHP-3\immagini\lights out.jpg"
    ]
];

 $genereScelto="tutte";

 //contolliamo se e presente un genere e se e presente lo mettiamo all'interno di genere scelto
 if(isset($_GET["genere"])){
    $genereScelto = $_GET["genere"];
 }
   
?>

<div class="contenitore">

 <div class="header">
  
  <h2>AJAX DISCHI JSON</h2>
    
   <div class="faq">

   <span> Genere </span>

   <form method="get">
    
   <! quando scegliamo un genere il form viene inviato automaticamente !>

   <select name="genere" onchange="this.form.submit()">

     <option value="tutte">
        Tutti
     </option>

     <?php 


     // creamo un array per inseruire i generi
     $generi=[];

     for($i=0; $i<count($dischi);$i++){

     //controlliamo se il genere e gia presente in caso non lo fosse lo aggiungiamo
     if(!in_array($dischi[$i]["genere"],$generi)){
        $generi[]=$dischi[$i]["genere"];

        echo "<option value='" . $dischi[$i]["genere"] . "'>";

        echo $dischi[$i]["genere"];

     
     }

     };
     
  
     ?>


    <div class="griglia">

    <?php 
    
    for($i=0; $i < count($dischi); $i++){
        if($genereScelto == "tutte" || $genereScelto == $dischi[$i]["genere"]){
            
        }
    }
    
    ?>
        
    
    
    <div>


   </select>
   </form>

   </div>


 </div>

</div>


    
</body>

</html>
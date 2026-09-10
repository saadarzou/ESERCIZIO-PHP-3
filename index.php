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

     <option value="tutte">Tutti </option>

     <?php 


     // creamo un array per inseruire i generi
     $generi=[];

     for($i=0; $i<count($dischi);$i++){

     //controlliamo se il genere e gia presente in caso non lo fosse lo aggiungiamo
     if(!in_array($dischi[$i]["genere"],$generi)){
        $generi[]=$dischi[$i]["genere"];

               echo "<option value='" . $dischi[$i]["genere"] . "' " . ($genereScelto == $dischi[$i]["genere"] ? "selected" : "") . ">";

        echo $dischi[$i]["genere"];

        echo "</option>";

     
     }

     };
     
  
     ?>
</select>


   </form>


 </div>

</div>


<div class="griglia">

<?php 

for($i=0; $i< count($dischi);$i++){

if($genereScelto == $dischi[$i]["genere"]){

echo"<div class='card'>";

 echo "<img class='immagini' src='" . $dischi[$i]["poster"] . "'>";
 echo "<h3 class='titoloCard' >" . $dischi[$i]["titolo"] . "</h3>";
 echo "<p class='artistaCard' >".$dischi[$i]["artista"] ."</p>";
 echo "<p class='genereAnnoCard' >". $dischi[$i]["genere"].".".$dischi[$i]["anno"]."</p>";
 
 echo "</div>";

}elseif($genereScelto == "tutte"){
 echo"<div class='card'>";

 echo "<img class='immagini' src='" . $dischi[$i]["poster"] . "'>";
 echo "<h3 class='titoloCard' >" . $dischi[$i]["titolo"] . "</h3>";
 echo "<p class='artistaCard' >".$dischi[$i]["artista"] ."</p>";
 echo "<p class='genereAnnoCard' >". $dischi[$i]["genere"]."  .  ".$dischi[$i]["anno"]."</p>";
 
 echo "</div>";
}}



?>






</div>


    
</body>

</html>
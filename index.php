<?php
require __DIR__ . "/Movie.php";
$film = [new Movie("Rambo", "azione, guerra", "Sylvester Stallone"), new Movie("Live Free or Die Hard", "azione, poliziesco, thriller", "Len Wiseman")];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    for($i=0; $i<sizeof($film); $i++){
        echo "<ul>
                 <li>
                     <h1>
                         Titolo: " . $film[$i]->original_title .
                     "</h1>
                 </li>
                 <li>
                     <p>
                         Genere: " . $film[$i]->genre .
                     "</p>
                 </li>
                 <li>
                     <p>
                         Regia: " . $film[$i]->direction .
                     "</p>
                 </li>
                 <li>
                     <p>
                         Descrizione: " . $film[$i]->description() .
                     "</p>
                 </li>
             </ul>";
    }
    ?>
</body>

</html>
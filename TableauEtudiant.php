<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tableau etudiant</title>
</head>
<body>
    <h1>Notes par Etudiants</h1>
    
<?php

$Etudiants = [
    ['Durand', '20, 15, 12'],
    ['Dupont', '5, 15, 10'],
    ['Smith', '3, 4, 2'],
    ['Toto', '0, 0, 0']
];

echo"<table>";


echo'<tr><th colspan ="2">Notes par Etudiant</th></tr>';

echo"<tbody>";
echo'<tr><td>nom</td> <td>notes</td><td>moyennes</td></tr>';

foreach ($Etudiants as [$nom, $note] ){
    $moy = moyennes($note) ;
    echo"<tr><td>$nom</td><td>$note</td><td>$moy</td></tr>";
}

echo"</tbody>";

echo"</table>";




function moyennes($chainMoyenne):float{ 

$tabNotes = explode(',',$chainMoyenne);

$somme = 0;

 for($i=0; $i<count($tabNotes); $i++){

    $somme= $somme + $tabNotes[$i];
 }
 $moyenne = $somme / count($tabNotes);

 return round($moyenne,2);



}






?>
</body>
</html>
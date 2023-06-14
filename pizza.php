<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Pizzas Mama</h1>   
    
   <?php

    //avec le Foreach*****************
    echo"<ul>";
    
     $pizzas = ["Reine", "Calzone", "3 fromages", "4 saisons", "Chèvre", "Tartiflette"];

     foreach($pizzas as $pizza){

        echo"<li>$pizza</li>" ;

        //echo"<p>#$pizza</p>";
        
     };
     echo"</ul>";
 
     //avec le For******************

     $tail = count($pizzas);
     echo"<ul>";
     for($i=0; $i<$tail;$i++ ){
        echo"<li>$pizzas[$i]</li>" ;
     }
     echo"</ul>";

     //avec le Do --- while 
     



     ?>
   


</body>
</html>
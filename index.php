<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;">PHP-TP1</h1>
    <?php
    
    $var1 = 15;
    $var2 = 3;
    $var3 = 3.14;
    $var4 = 0;

    $addi = $var1 + $var2;

    $milt = $var1 * $var2;

    //echo($var1." "."+"." ".$var2." "."="." ".$addi);
    echo("<br>");
    //ou

    echo "{$var1} + {$var2} = ".($var1 + $var2);

    echo("<br>");

    echo($var1." "."*"." ".$var2." "."="." ".$milt);
    echo("<br>");
    
    if($var4 != 0){
        echo "{$var1} / {$var4} = ".($var1 / $var4);
    }else{
        echo "{$var1} / {$var4} = "."<h2>Operation impossible</h2>";

    }
    //echo($var1." "."/"." ".$var4." "."="." "."<h2>Operation impossible</h2>");
    
    


    ?>


</body>
</html>
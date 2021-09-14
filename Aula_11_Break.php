<?php

    $vet=array("bike","bicicleta","juaninha","magrela","speed");
    $tam=count($vet);//retorna o tamanho do vetor

    foreach($vet as $i)
    {

        echo "$i<br>";
        
        if($i=="juaninha")
        {
            echo "<br>$i não é bicicleta <hr>";
            break;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
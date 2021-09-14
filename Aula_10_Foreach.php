<?php

    $transp=array("aviao","carro","navio");

    foreach($transp as $veicu/*veicu vai representar os valores de transp*/)
    {
        echo "Veiculo: $veicu<hr>";

        if($veicu=="navio")
        {
            echo "$veicu<hr>";
        }

        if($veicu=="bike")
        {
            echo "Encontramos sua bicicleta!!!!";
        }else{

            echo "não encontramos sua bicicleta, tururu :(";

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
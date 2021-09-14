<?php

    function aula($num)
    {
        switch ($num) {
            case ($num<100):
                echo "<pre>Valor de num = $num</pre><hr>";
                aula($num+1);
                break;
            
            default:
                
                break;
        }
        
    }


    function fat($num)
    {
        if($num<0)
        {
            return -1;
        }

        if($num <=1)
        {
            return 1;
        }

        return $num *fat($num-1);
    }

    $fatorial=fat(5);
    echo "<pre>O fatorial de 5 é:".fat(5). "</pre><br>";
    aula(19);

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
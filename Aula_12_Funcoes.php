<?php

        function soma($n1,$n2)
        {
            $res=$n1+$n2;
            echo "$n1 + $n2 = $res<br>";
        }

        soma(45332,9288798);

        function soma2($n1,$n2)
        {
            $res=$n1+$n2;
            return $res;
        }

        $so=soma2(455,321343);

        echo "Resultado: $so<hr>";

        $valores=array(3,3,3,3,3,3,3,3,3,3,3,3,3,3,3);

        function media($vet)
        {

            $tam=count($vet);
            
            $soma=0;
            
            for($i=0;$i<$tam;$i++)
            {
                $soma+=$vet[$i];
            }

            return $soma/$tam;

        }

        $me=media($valores);

        echo "A média de valores é : $me<hr>";

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
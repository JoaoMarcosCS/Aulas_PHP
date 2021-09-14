<?php

    $op=5;

    switch($op)
    {

        case 1:
            echo "Carro:";break;

            case 2:
                echo "Caminhão:";break;

                case 3:
                    case 4:
                        echo "Avião:";break;

                        case 5:
                            echo "Navio:";break;

                            default:
                            echo "Vai de bicicleta OTÁRIOOOOO:";break;

    }

    switch ($op) {
        case ($op>=1 and $op<=3):
            echo "Você escolheu o transporte terrestre, pobre";
            break;
        
            case ($op>=3 and $op<=5):
             echo "Você escolheu outro tipo de transporte, parabéns você está destruindo o planeta seu riquinho de merda";
             break;

             default:
             echo "Você não escolheu nenhum transporte, parabéns";
             break;
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
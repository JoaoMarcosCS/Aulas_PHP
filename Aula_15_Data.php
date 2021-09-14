<?php

    $dia=date("d");
    $mes=date("m");
    $ano=date("y");

    $m=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

    echo "Data:$dia de ".$m[$mes-1] ." de $ano <hr>";

    $mi=date("i");
    $hora=date("H");//h =12h - H=24h
    $sec=date("s");

    echo "Hora: ".$hora."h:".$mi."m:".$sec."s <hr> ";/* a data está errada e eu não sei como modficar o arquivo .conf para arrumar para o horario*/

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
<?php

     $dia=date("d");
    $mes=date("m");
    $ano=date("y");

    $m=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

    echo "Data:$dia de ".$m[$mes-1] ." de $ano <hr>";

?>
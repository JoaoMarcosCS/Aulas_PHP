<?php


        $arquivo=fopen("contador.txt","r");
        $contador=fread($arquivo,100);// o 100 representa a qantidades de numeroes que podem ter as linhas;
        $contador++;
        $arquivo=fopen("contador.txt","w");
        fwrite($arquivo,$contador);
        echo "<br>Visitas: $contador<br>" ;
        fclose($arquivo);



?>
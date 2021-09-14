<?php


        $arquivo=fopen("aula42.txt","r");

        while(!feof($arquivo))//equanto não chegar no final do arquivo
        {
            echo fgets($arquivo,40000);//o fgets lê uma linha e para tanto, nós temos que estimar um valor em bytes para essa linha;
            echo "<br>";
            echo fgets($arquivo,100);//esse fgets vai ler o nome 
        }

        fclose($arquivo);

?>
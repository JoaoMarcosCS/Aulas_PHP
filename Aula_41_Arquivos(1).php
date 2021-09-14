<?php


        //r = abre p/ leitura, ponterio no inicio
        //r+ = abre p/ leitura e escrita
        //w = abre/p escrita, ponteiro no inicio e apaga o conteudo, se o arq não existir ele cria
        //w+ = faz a mesma coisa que o w só que faz para escrita/leitura 
        //a = abre p/escrita ponteiro no final, cria arq se não existir
        //a+ = abre p/leitura e escrita
        //x= abre p/ecrita, ponteiro no inicio, se arq existir, gera um erra E_WARNING
        //x+ = abre p/escrita/leitura

        $arquivo=fopen("teste.txt","a");

        fwrite($arquivo,"\r\nTeste para ver se está funcionando");

        $arquivo=fopen("teste.txt","r");

        $conteudo=fread($arquivo,100);//o tamanho é em bytes

        echo $conteudo;

        fclose($arquivo);

?>
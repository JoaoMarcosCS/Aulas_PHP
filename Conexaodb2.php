<?php

    $server="localhost";
    $user="root";
    $senha="";
    $servername="projeto_crud";

    $connect=mysqli_connect($server,$user,$senha,$servername);
    mysqli_set_charset($connect,"utf8");//comando para definir a formatação da página
    if(mysqli_connect_error())
    {
        echo "Erro na conexão: ".mysqli_connect_error();
    }

?>
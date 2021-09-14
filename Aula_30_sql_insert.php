<?php

    //o insert insere um registro no db

    $server=mysqli_connect("localhost","root","");
    mysqli_select_db($server,"primeiro");
    
    
    $resultado=mysqli_query($server,"SELECT * FROM primeiro_tb");
    $registros=mysqli_num_rows($resultado);
    

    $nome="marcão";
    $user="mey";
    $senha="18007";
    $email="jmcsjooomarcos@gmail.com";
    $tel="99819933";
    $status="negado";
    $obs="tá funcionando pohaaaa";

    $sql="INSERT INTO primeiro_tb VALUES (NULL,'$nome','$user','$email','$senha',$tel,'$status','$obs' )";//colocamos NULL porque é o campo do código e ele está como auto-incremento
 
    
    $executa=mysqli_query($server,$sql);

    $confere=mysqli_affected_rows($server);

    echo "$confere registro(s) criado(s)<br>";

    mysqli_close($server);

?>
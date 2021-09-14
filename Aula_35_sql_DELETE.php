<?php

    include "Conexao.inc";

    $num=2;
    $sql="DELETE FROM primeiro_tb WHERE username='mey'";
        
    $executa=mysqli_query($server,$sql);

    $res=mysqli_affected_rows($server);

    if($res>0)
    {
        echo "$res Registro deletado ";
    }else{
        echo "Nenhum registro deletado";
    }

    mysqli_close($server);

?>
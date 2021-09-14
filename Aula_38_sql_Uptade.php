<?php

        include "Conexao.inc";

        // o uptade muda o valor do um campo

        $muda="marcos";
        $sql="UPDATE primeiro_tb SET username='marcos' WHERE nome='jão' ";

        $executa=mysqli_query($server,$sql);

        if($executa){

            echo "Registro alterado com sucesso";
        }else{
            echo "Registro não alterado :(";
        }

        mysqli_close($server);


?>
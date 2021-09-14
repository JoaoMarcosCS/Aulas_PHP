<?php

        $server=mysqli_connect("localhost","root","");
        mysqli_select_db($server,"primeiro");

        $categoria=1;
        $sql="SELECT * FROM Estoque WHERE categoria=$categoria";//estou listando todos os produtos que categori = 1

        $executa=mysqli_query($server,$sql);
        $registros=mysqli_num_rows($executa);//aqui estamos armazenando o numero de registros encontrados

        if($registros>=1)
        {
            echo "<br><pre>$registros Registrios encontrados</pre><br>";
        }else{
            echo "<br><pre>Aconteceu algum erro. Tente novamente</pre><br>";
        }

        mysqli_close($server);

?>
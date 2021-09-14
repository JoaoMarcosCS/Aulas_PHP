<?php

        $server=mysqli_connect("localhost","root","");
        mysqli_select_db($server,"primeiro");

        $produto=$_POST['nome'];
        $qtd=$_POST['qtd'];
        $preco=$_POST['preco'];
        $codigo=$_POST['codigo'];

        $sql="INSERT INTO Estoque VALUES ('$codigo','$produto','$preco','$qtd')";

        $executa=mysqli_query($server,$sql);

        $confere=mysqli_affected_rows($server);

        

        if($confere==-1)
        {
        echo "Registro não criado<br>Pode ser que você tenha errado o nome do produto ou alguma outra coisa, tente novamente<br><button><a href=form.html>Voltar</a></button>";
    }else{
        echo "$confere registro(s) criado(s)<br>";
        echo "<br><button><a href=form.html>Voltar</a></button>";
    }

?>


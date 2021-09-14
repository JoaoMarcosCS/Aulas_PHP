
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <table border="1">

        <tr>
            <td>Produto</td><td>Código</td><td>Preço</td><td>Quantidade</td><td>Categoria</td>
        </tr>

   

<?php

    include "Conexao.inc";

    $cat1=$_POST['cat1'];
    $cat2=$_POST['cat2'];


    $sql="SELECT * FROM Estoque WHERE categoria=$cat1 OR categoria=$cat2";

    $executa=mysqli_query($server,$sql);

    while($registro=mysqli_fetch_row($executa))//o fetch_rows retorna os registros, e como está o while ele faz enquanto retornar registros
    {//o fetch joga os registros em um vetor, já que é uma tabela;
        $codigo=$registro[0];
        $produto=$registro[1];
        $preco=$registro[2];
        $qtd=$registro[3];
        $categoria=$registro[4];

        echo "<td>$produto</td>$codigo<td></td> <td>$preco</td><td>$qtd</td><td>$categoria</td></tr>";
    }

    

    mysqli_close($server);
?>

</table>

</body>
</html>

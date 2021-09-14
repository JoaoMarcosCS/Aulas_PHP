
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

    
    


    $sql="SELECT * FROM Estoque WHERE produto LIKE 'Processador%'";//o like pode ser usado junto com dois operadores, o % 
    //que significa a%(tem que comecar com a e o resto tanto faz), %a%(o do meio tem que ter a letra)
    //o _ siginifica _a(na segunda posição tem que ter a letra a);

    $executa=mysqli_query($server,$sql);

    while($registro=mysqli_fetch_row($executa))//o fetch_rows retorna os registros, e como está o while ele faz enquanto retornar registros
    {//o fetch joga os registros em um vetor, já que é uma tabela;
        $codigo=$registro[0];
        $produto=$registro[1];
        $preco=$registro[2];
        $qtd=$registro[3];
        $categoria=$registro[4];

        echo "<td>$produto</td><td>$codigo</td> <td>$preco</td><td>$qtd</td><td>$categoria</td></tr>";
    }

    

    mysqli_close($server);
?>

</table>

</body>
</html>

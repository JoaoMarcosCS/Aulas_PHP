<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bla bla blu bla</title>
</head>
<body>
    
    
    <form action="Aula_36_Deletado_registros_selecionados(1).php" method="post" name="fexcluir">
    <table border="1">
    
    <tr>
        <td>Código<td>Nome</td><td>Selecionar</td>
    </tr>

        <?php

            include "Conexao.inc";

            if(isset($_POST['sel']))
            {
                foreach($_POSt['sel'] as $codigo)
                {
                    $sql="DELETE FROM primeiro_tb WHERE código=$codigo ";
                    $executa=mysqli_query($server,$sql);
                }
            }else{

                echo "Não submetido";
            }

            $sql="SELECT * FROM primeiro_tb ORDER BY código";
            $executa=mysqli_query($server,$sql);

            while($resgistro=mysqli_fetch_row($executa))
            {
                $cod=$resgistro[0];
                $nome=$resgistro[1];

                echo "<tr>";
                echo "<td>$cod</td><td>$nome</td>";
                echo "<td aling=center><input type=checkbox name=sel[] value=$cod ></td>";
                echo "</tr>";
            }

            mysqli_close($server);


        ?>
    
    </table>

            
    </form>
        
        <input type="hidden" value="fdel" name="fdel">
        <input type="submit" value="Excluir" name="btexclui">

</body>
</html>
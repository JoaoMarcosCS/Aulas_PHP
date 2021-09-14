<?php
    include "Conexao.inc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <h1>Pesquisa</h1>

        <form action="" name="" method="post">

        <label for=""></label><br>
        <input><br><br>

        <select name="estados" id="">

                <?php

                $sql="SELECT * FROM estados order by estado";
                $executa=mysqli_query($server,$sql);

                while($registros=mysqli_fetch_row($executa))
                {
                    $estado=$registros[0];
                    $sigla=$registros[1];

                    echo "<option value=$sigla>$estado</option>";
                }

                ?>
                
            </select>

            <br>

        </select>

        </form>

        <textarea name="" id="jm" cols="30" rows="10"></textarea>


</body>

<script>


            var preguica=document.getElementById('jm');

            preguica.value="Link do vídeo caso eu queira continuar com o código: <br>https://www.youtube.com/watch?v=5jXcz6AhWzk&list=PLx4x_zx8csUgB4R1dDXke4uKMq-IrSr4B&index=44"

</script>
</html>
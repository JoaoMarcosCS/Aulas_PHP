<?php

    session_start();


    //unset($_SESSION['nome']);//exclui a variavel nome dessa sessão

    echo "<br>".$_SESSION['nome']."<hr>".$_SESSION['texto']."<hr>";
    //caso o usuario entre diretamente nessa pagina, os dados nome e texto não serão "atualizados" pois não se inicio a sessão
    //da outra pagina

    if(isset($_SESSION['vlog']))
    {
        echo "<hr>".$_SESSION['vlog'];
    }else{

        echo "<hr>A variavel vlog ainda não foi criada";

    }

    echo "<br><a href=Aula_19_Sessoes.php target=_self>Aula 19</a>";
    echo "<br><a href=pg2.php target=_self>Pg2</a>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    

</body>
</html>
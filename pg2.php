<?php

    session_start();


    //unset($_SESSION['nome']);//exclui a variavel nome dessa sessão
    $_SESSION['vlog']="vlog do fessor bruno";
    echo "<br>".$_SESSION['nome']."<hr>".$_SESSION['texto'];
    //caso o usuario entre diretamente nessa pagina, os dados nome e texto não serão "atualizados" pois não se inicio a sessão
    //da outra pagina
    echo "<br><a href=Aula_19_Sessoes.php target=_self>Aula 19</a>";
    echo "<br><a href=pg3.php target=_self>Pg3</a>";

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
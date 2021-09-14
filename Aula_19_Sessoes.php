<?php

    //para acabar com uma sessão é preciso fechar o browser e não só a pagina ou usamos o session destroy
    session_start();

    $_SESSION['nome']="Carlão";
    $_SESSION['texto']="Não sei o porquê de eu usar sempre esse nome";

    //unset($_SESSION['nome']);//exclui a variavel nome dessa sessão

    echo "<br>".$_SESSION['nome']."<hr>".$_SESSION['texto'];


    if(isset($_SESSION['vlog']))
    {
        echo "<hr>".$_SESSION['vlog'];
    }else{

        echo "<hr>A variavel vlog ainda não foi criada";

    }

    echo "<br><a href=pg2.php target=_self>pg2</a>";
    echo "<br><a href=pg3.php target=_self>Pg3</a>";

    // session_destroy();//destroi a sessao

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
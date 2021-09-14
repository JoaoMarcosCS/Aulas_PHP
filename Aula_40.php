<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        include "Conexao.inc";
        session_start();
        if(isset($_SESSION["numLogin"]))
        {
            $n1=$_GET["num1"];
            $n2=$_SESSION["numLogin"];
                if($n1 != $n2){
                    
                    echo "Login não efetuado";
                    exit;

                }
            }else
                {
                    echo "Login não efetuado";
                    exit;
                }
        

        

        echo "Pagina inicial";
        echo "Username:". $_SESSION['username'];


                
        unset($_SESSION['numLogin']);
        //destruindo a variavel numlogin
        // session_unregister('numLogin');

        session_destroy();//acabando com a sessão

        mysqli_close($server);

    ?>


</body>
</html>
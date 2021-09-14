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


        $username=$_POST['nome'];
        $senha=$_POST['senha'];

        $sql="SELECT * FROM usuarios WHERE username='$username' AND senha='$senha'";

        $executa=mysqli_query($server,$sql);

        $linha=mysqli_affected_rows($server);

        if($linha>0)
        {
            $num=rand(1000,9000);
            setcookie("numLogin",$num);
            header("Location:Aula39.php?num1=$num");
            
        }else{

            echo "Erro no login<br><button><a href=form(39).html>Voltar</a></button>";

        }


    ?>


</body>
</html>
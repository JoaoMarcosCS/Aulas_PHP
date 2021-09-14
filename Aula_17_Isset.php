<?php

    $aula;

    if(isset($aula)){
        echo "Variavel declarada";
    }
        

    else{
        echo "Variavel não declarada";
    }
         

            $aula2="";

            if(isset($aula2)){
                echo "<hr>Variavel declarada";
            }
                
        
                else{
                    echo "<hr>Variavel não declarada";
                }

                echo "<hr>Verificar se o formulario existe";


                
                if(isset($_POST["nome"]))
                {
                    $nome=$_POST["nome"];
                    echo "<pre>Campo nome foi preenchido<br>Nome: $nome<hr><pre>";
                }else{
                    echo "<pre>Campo nome não foi preenchido <br></pre>";
                }
                    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

         <form action="Aula_17_Isset.php" method="post" name="formu">
        <label for="">Nome: </label><input type="text" name="nome" id="">
        <input type="submit" value="Enviar">
        </form>
                
    
</body>
</html>


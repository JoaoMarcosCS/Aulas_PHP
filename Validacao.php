


<?php

        if(isset($_POST['envia-form'])):

            $erros=array();

            if(!$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT  )):
             $erros[]="Idade precisa ser um inteiro";

            endif;

            if(!$url=filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)):
                $erros[]="Erro na url";
   
               endif;

               if(!$ip=filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)):
                $erros[]="Erro no ip";
   
               endif;

               
               if(!$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
                $erros[]="Erro no email";
   
               endif;

               
               if(!$peso=filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)):
                $erros[]="Erro no peso";
   
               endif;

            if(!empty($erros)):

                foreach($erros as $erro):
                    echo "<li>$erro</li>";

                endforeach;

            else:
                echo "Todos seus dados estão corretos";
               
            endif;

        endif;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        
        <fieldset>
            <legend>Formulário</legend>
            <br>
            <label for="">Nome: </label><input type="text" name="nome" id=""><br>
            <label for="">Idade: </label><input type="text" name="idade" id=""><br>
            <label for="">e-mail: </label><input type="text" name="email" id=""><br>
            <label for="">Peso: </label><input type="text" name="peso" id=""><br>
            <label for="">IP: </label><input type="text" name="ip" id=""><br>
            <label for="">URL</label><input type="text" name="url" id=""><br><br>
            <input type="submit" name="envia-form" value="Enviar">

        </fieldset>

        </form>


</body>
</html>
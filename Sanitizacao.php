


<?php

if(isset($_POST['envia-form'])):

    $erros=array();

    $nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
    //esse é uma 'sanitização' importante pois
    //desse modo o usuario não vai conseguir inserir códigos html
    echo $nome."<br>";
    $idade=filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);//com isso, nós podemos colocar um texto no input
    //que esse filtro vai retirar todo o texto e vai retornar somente um numero int
    echo $idade."<br>";
    if(!$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT  )):
     $erros[]="Idade precisa ser um inteiro";

    endif;

    $url=filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);//com isso podemos colocar caracteres especiais, espaços e tudo mais
    //em uma url
    echo $url."<br>";
    if(!$url=filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)):
        $erros[]="Erro na url";

       endif;

       $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);//com isso podemos adicioanr caracteres especiais e tudo mais
       //mas com o email temos que colocar um filtro de validacao pois o usuario pode colocar dois @@ e desse modo o sanitize
       //não vai arruamar e vai retornar esse valor e esse email está errado. Então por isso temos que colocar nesse
       //caso um validate
       echo $email."<br>";
       if(!$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
        $erros[]="Erro no email";

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
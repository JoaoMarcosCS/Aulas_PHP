<?php


    $nome=$_POST['nome'];
    $msg=$_POST['conteudo'];
    $conteudo=$msg."\r\n".$nome;

    $arquivo=fopen("aula42.txt","a");

    fwrite($arquivo,$conteudo);

    echo "Mensagem gravada: ".$conteudo;

    fclose($arquivo);

    echo "<button><a href=Aula42(2).html target=__self>Voltar</a></button>";


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
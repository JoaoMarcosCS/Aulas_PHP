<?php
   
    //variaveis

    $nome="Carlos";
    $valor=10.3;
    $valor_int=19;
    echo "Nome do usuario:$nome";
    echo "<br>Valor inteiro".$valor_int."<br>";
    echo "Valor quebrado: ".$valor."<br>";

    //constantes
    echo "<br><hr><br>";
    define("p","<hr>");
    define("cnome","Marcos");
    define("caminho_arquivo",__FILE__);
    echo "Nome constante: ".cnome."<br>";
    echo "Caminho do arquivo: ".caminho_arquivo."<br>";
    echo "Caminho da pasta: ".__DIR__."<br>";
    echo "Versão do PHP: ".PHP_VERSION."<br>";
    echo "Numero da linha: ".__LINE__.p;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro script PHP</title>
</head>
<body>
    
    
</body>
</html>
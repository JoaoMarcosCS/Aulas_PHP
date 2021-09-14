<?php
    $i=1;

    $vet=array(6);
    $vet2=array("nome"=>"João","Cidade"=>"APARECIDA","Curso"=>"PHP");//podemos usar como um map, o que é mais interessante

    define('p',"<hr>");
    
    $mat=array(
        array("Carro1",654332),
        array("Carro2",8789),
        array("Carro2",239981979)
    );

    $letra='A';

    echo "Carro $letra ".$mat[0][0]." - Valor: ".$mat[0][1].p;
    $letra++;

    echo "Carro $letra ".$mat[1][0]." - Valor: ".$mat[1][1].p;
    $letra++;

    echo "Carro $letra ".$mat[2][0]." - Valor: ".$mat[2][1].p;
    $letra++;

    $vet[0]="Moto";
    $vet[1]="Carro";
    $vet[2]="Bicicleta";
    $vet[3]="Avião";
    $vet[4]="Caminhão";
    $vet[5]=123456;
    $vet[6]=$vet2["nome"];
    echo "O valor com indice $i é igual à ".$vet[4].p;

    echo "Nome:".$vet2["nome"].p."Cidade:".$vet2["Cidade"].p."Curso:". $vet2["Curso"].p;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    
    
</body>
</html>
<?php

    abstract class Carrobase{

        public $potencia;
        public $velmax;
        public $portas;
        public $ligado;

        abstract function teste();//nas classes filhas, temos que declarar essa função novamente e aí podemos colocar um código nele
        

        function mostra()
        {
            echo "Portas: ".$this->portas."<hr>";
            echo "Velocidade máxima(KM\H): ".$this->velmax."<hr>";
            echo "Potência: ".$this->potencia."<hr>";
            if($this->ligado){
                echo "Estado: <font color=green><pre>LIGADO</pre></font><hr>";
            }else{
                echo "Estado: <font color=red><pre>DESLIGADO</pre></font><hr>";
            }
            
        }

        function deslgado()
        {
            $this->ligado=false;
        }

        function ligado()
        {
            $this->ligado=true;
        }

    }

    class Carro extends Carrobase{

        function __construct($pt,$velmax,$por)
        {
            $this->velmax=$velmax;
            $this->portas=$por;
            $this->potencia=$pt;
            $this->mostra();
        }

        function teste()
        {

            echo "Quando um metodo é declarado como abstract, temos que colocar um codigo nas funções das classes filhas";
        }

        
    }


    $carro1=new Carro(40,2000,4);

    $carro1->ligado();
    echo "<br><br>Ligando o carro...<br><br>";
    $carro1->mostra();

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
<?php

    abstract class Carrobase{

        public $nome;
        public static $cor;//quando é static, a variavel pertence a classe, ou seja, na primeira estanciação, a variavel 
        //já não vai ser mais estanciada

        public function __construct($name,$color)
        {
            self::$cor=$color;
            $this->nome=$name;
            
        }

        public function mostra()
        {
            echo "<br>Nome: ".$this->nome."<br>Cor: ".self::$cor."<br>";
        }
    }


    class Carro extends Carrobase{

    }

    $carro1=new Carro("Cartola","Pink");
    
    $carro2=new Carro("Parati","Blue");
    
    $carro3=new Carro("Magrela","Cinza");
    
    $carro1->mostra();
    $carro2->mostra();
    $carro3->mostra();

    
?>

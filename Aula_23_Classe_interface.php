<?php


    interface Carropadrao{

        function liga();
        function desliga();
        function mostra();
        function acelera();
        function freia();
    }

    interface Carroguerra{

        function atiracanhao();
        function atirametralhadora();
    }

    abstract class Carrobase implements Carropadrao,Carroguerra{//todos os métodos declarados no interface devem ser declarados
        //na classe que implementa-la

        private $ligado=false;
        public $velmax;
        public $vel=0;
        public $potencia;

        
        function atiracanhao(){}
        function atirametralhadora(){}

        function mostra()
        {
            echo "Velocidade atual(KM\H): ".$this->vel."<hr>";
            echo "Velocidade máxima(KM\H): ".$this->velmax."<hr>";
            echo "Potência: ".$this->potencia."<hr>";
            if($this->ligado){
                echo "Estado: <font color=green><pre>LIGADO</pre></font><hr>";
            }else{
                echo "Estado: <font color=red><pre>DESLIGADO</pre></font><hr>";
            }
            
        }

        function freia()
        {
                
        }

            
        function acelera()
        {
            
        }

        function desliga()
        {
            $this->ligado=false;
        }

        function liga()
        {
            $this->ligado=true;
        }

    }

    class Carro extends Carrobase{

        function __construct($potencia,$velmax,$vel)
        {
            $this->velmax=$velmax;
            $this->potencia=$potencia;
            $this->vel=$vel;
        }

    }

    $carro1=new Carro(220,300,82);
    $carro1->mostra();
    echo "<br>";
    $carro1->liga();
    $carro1->mostra();

    
?>


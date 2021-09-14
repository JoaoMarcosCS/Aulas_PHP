<?php

    class Carro{

        var $velmax;
        var $tipo;
        var $ligado;
        var $nome;
        

        public function __construct($tipo,$nome)
        {
            $this->tipo=$tipo;
            $this->nome=$nome;
            $this->ligado=true;
            if($tipo==1){
                $this->velmax=120;
                }elseif ($tipo==2){
                    $this->velmax=170;
                }elseif($tipo==3){
                        $this->velmax=220;
                    }else{
                        $this->velmax=0;
                    }
        }

        function mostra()
        {
            echo "Tipo: ".$this->tipo."<hr>";
            echo "Nome: ".$this->nome."<hr>";
            echo "Velocidade máxima(KM\H): ".$this->velmax."<hr>";
            
            if($this->ligado){
                echo "Estado: <font color=green><pre>LIGADO</pre></font><hr>";
            }else{
                echo "Estado: <font color=red><pre>DESLIGADO</pre></font><hr>";
            }
            
        }
    }

    $carro1= new Carro(2,"Baixinho");

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
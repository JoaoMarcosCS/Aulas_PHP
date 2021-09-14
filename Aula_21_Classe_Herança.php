<?php

    class Aula{

        public $mensagem;
        public $conteudo;
        public $recado;

        public $teste1="publica, podemos acessar fora da classe e modifica-la";
        protected $teste2="protegida, podemos usar essa variavel em classes filhas mas não podemos acessa-la fora das classes";
        private $teste3="privada, só podemos acessa-lá dentro da classe na qual ela foi criada";

        public function __construct()
        {

        }

        function altera($op)
        {
            switch($op)
            {
                case 1: $this->mensagem="Estou alterando a mensagem pois ela é publica e isso permite que uma função a altere";echo $this->mensagem;break;
                case 2: $this->conteudo="Estou alterando o conteudo pois ele é publico, se fosse privado, eu não poderia modificalo";echo $this->conteudo;break;
                case 3:$this->recado="Eu poderia fazer uma função para modificar as vsariaveis, pois elas são publicas";echo $this->recado;break;
                default:echo "Não tyemos essa opção<br>";break;
            }

        }
    }

    class Classe extends  Aula{//extedns é para herdar de uma classe, a classe Classe está herdando as propriedades de Aula

    }

    $aula1=new Aula();

    $aula1->altera(3);

    $aula2=new Classe();

    echo "<br><br>";

    $aula2->altera(2);

    echo "<hr>Quando estanciamos uma variavel como public, nós podemos acessa-la aqui no echo, observe: ".$aula1->recado;

    $teste=new Classe();

    echo "<hr>".$teste->teste1;
   

?>


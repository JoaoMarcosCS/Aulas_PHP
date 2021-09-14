<?php

    abstract class Carrobase{

        final function cor(){}

    }

    class Carro extends Carrobase{

            function cor(){}

    }

    class Celta extends Carro{

        //celta esá herdando a funcão cor de carro, e não a função original de Carrobase
        //se no Carrobase, a função cor tivesse sido delcarada com final, não podemoriámos
        //na classe Carro, ter outra função com o mesmo nome

        /*Se utilizarmos o final para uma classe, essa classe não poderá ser herdada*/
    }

?>
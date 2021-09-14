<?php
    //ESSA TEM QUE SER A ESTRUTURA PARA A UTILIZAÇÃO DO MATERIALIZE
        include_once "Header.php";
?>

<!--É AQUI NO MEIO QUE VAMOS COLOCAR O CÓDIGO HTML, SEM HEADER HTML:5 NEM NADA, SÓ O CÓDIGO!-->


<div class="row">
    <div class="col s12 m6 push-m3"><!--o push-m3 centraliza o objeto-->
                <h3 class="light">Novo cliente</h3><!--o light deixa o texto mais claro--> 
                
                <form action="creat.php" method="post">
                
                    <div class="input-field col s12" >
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12" >
                    <input type="text" name="sobrenome" id="sobrenome">
                    <label for="sobrenome">sobrenome</label>
                    </div>

                    <div class="input-field col s12" >
                    <input type="text" name="email" id="email">
                    <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12" >
                    <input type="text" name="idade" id="idade">
                    <label for="idade">idade</label>
                    </div>

                    <button type="submit" name="btn-cadastrar"class="btn">Cadastrar</button>
                    <a href="Cadastro(materialize).php" class="btn green">Lista de clientes</a>
                  </form>
    </div>
</div>


<?php

    include_once "Footer.php";

?>
<?php
    //ESSA TEM QUE SER A ESTRUTURA PARA A UTILIZAÇÃO DO MATERIALIZE
        include_once "Header.php";

        require_once "Conexaodb2.php";


        if(isset($_GET['id'])){
            $id=mysqli_escape_string($connect,$_GET['id']);

            $sql="SELECT * FROM clientes WHERE id = $id";

            $executa=mysqli_query($connect,$sql);

            $dados=mysqli_fetch_array($executa);//os dados são transferidos por um vetor para a variavel


        }
?>

<!--É AQUI NO MEIO QUE VAMOS COLOCAR O CÓDIGO HTML, SEM HEADER HTML:5 NEM NADA, SÓ O CÓDIGO!-->


<div class="row">
    <div class="col s12 m6 push-m3"><!--o push-m3 centraliza o objeto-->
                <h3 class="light">Novo cliente</h3><!--o light deixa o texto mais claro--> 
                
                <form action="Update.php" method="post">
                   <input type="hidden" name="id" id="" value="<?php echo $dados['id']; ?>">
                    <div class="input-field col s12" >
                    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                    <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12" >
                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>">
                    <label for="sobrenome">sobrenome</label>
                    </div>

                    <div class="input-field col s12" >
                    <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
                    <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12" >
                    <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'];?>">
                    <label for="idade">idade</label>
                    </div>

                    <button type="submit" name="btn-editar"class="btn">Atualizar</button>
                    <a href="Cadastro(materialize).php" class="btn green">Lista de clientes</a>
                  </form>
    </div>
</div>


<?php

    include_once "Footer.php";

?>
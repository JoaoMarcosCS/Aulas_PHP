<?php
    //ESSA TEM QUE SER A ESTRUTURA PARA A UTILIZAÇÃO DO MATERIALIZE
        include_once "Header.php";

        require_once "Conexaodb2.php";

       require_once "Mensagem.php";
?>

<!--É AQUI NO MEIO QUE VAMOS COLOCAR O CÓDIGO HTML, SEM HEADER HTML:5 NEM NADA, SÓ O CÓDIGO!-->
<div class="row">
    <div class="col s12 m6 push-m3"><!--o push-m3 centraliza o objeto-->
                <h3 class="light">Clientes</h3><!--o light deixa o texto mais claro-->
                        <table class="striped"><!--o striped deixa a tabela zebrada-->
                            <thead>
                            <tr>
                            <th>
                            Nome:
                            </th>
                            <th>Sobrenome</th>
                            <th>Email:</th>
                            <th>Idade: </th>
                            </tr>
                            </thead>
                       
                        <tbody>

                            <?php
                            $sql="SELECT * FROM clientes";
                            $executa=mysqli_query($connect,$sql);
                        
                            if(mysqli_num_rows($executa)>0){

                            while($dados=mysqli_fetch_array($executa)):

                                 
                            
                            ?>

                            <tr>
                                <td><?php echo $dados['nome'];?></td>
                                <td><?php echo $dados['sobrenome'];?></td>
                                <td><?php echo $dados['email'];?></td>
                                <td><?php echo $dados['idade'];?></td>
                                <td><a href="Editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange "><i class="material-icons">edit</i></a></td>
                                <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons" >delete</i></a></td>

                             <!-- Modal Structure -->
                                <div id="modal<?php echo $dados['id'];?>" class="modal">
                                    <div class="modal-content">
                                    <h4>Certeza?!</h4>
                                    <p>Tem certeza que deseja excluir esse cliente</p>
                                    </div>
                                    <div class="modal-footer">
                                    
                                    
                                    <form action="Deletar.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

                                        <button type="subimt" name="btn-deletar" class="btn red">Sim caramba, quero deletar!</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>

                                    </div>
                                </div>


                            </tr>

                            <?php
                            endwhile;
                        }else{

                            ?>
                            <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            </tr>

                            <?php

                        }
                            ?>
                        </tbody>
                        
                        </table>    

            <a href="Adicionar(materialize).php" class="btn">Adicionar clientes</a>
    </div>
</div>


<?php

    include_once "Footer.php";

?>
<?php

    require_once "Conexaodb2.php";

    session_start();


    if(isset($_POST['btn-deletar'])){
        
        $id=mysqli_escape_string($connect,$_POST['id']);

        $sql="DELETE FROM clientes WHERE id='$id'";

        if(mysqli_query($connect,$sql)){
            $_SESSION['mensagem']="Deletado com sucesso";
            header('Location:Cadastro(materialize).php');
        }else{
            $_SESSION['mensagem']="Erro ao deletar";
            header('Location:Cadastro(materialize).php');
        }
    }


?>
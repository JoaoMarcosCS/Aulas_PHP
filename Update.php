<?php

    require_once "Conexaodb2.php";

    session_start();


    if(isset($_POST['btn-editar'])){
        $nome=mysqli_escape_string($connect,$_POST['nome']);
        $idade=mysqli_escape_string($connect,$_POST['idade']);
        $email=mysqli_escape_string($connect,$_POST['email']);
        $sobrenome=mysqli_escape_string($connect,$_POST['sobrenome']);

        $id=mysqli_escape_string($connect,$_POST['id']);

        $sql="UPDATE  clientes SET nome ='$nome' ,sobrenome='$sobrenome', email='$email' ,idade='$idade' WHERE id='$id'";

        if(mysqli_query($connect,$sql)){
            $_SESSION['mensagem']="Atualizado com sucesso";
            header('Location:Cadastro(materialize).php');
        }else{
            $_SESSION['mensagem']="Erro ao atualizar";
            header('Location:Cadastro(materialize).php');
        }
    }


?>
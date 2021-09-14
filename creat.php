<?php

    require_once "Conexaodb2.php";

    session_start();


    if(isset($_POST['btn-cadastrar'])){
        $nome=mysqli_escape_string($connect,$_POST['nome']);
        $idade=mysqli_escape_string($connect,$_POST['idade']);
        $email=mysqli_escape_string($connect,$_POST['email']);
        $sobrenome=mysqli_escape_string($connect,$_POST['sobrenome']);

        $sql="INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('$nome','$sobrenome','$email','$idade')";

        if(mysqli_query($connect,$sql)){
            $_SESSION['mensagem']="Cadastrado com sucesso";
            header('Location:Cadastro(materialize).php?sucesso!');
        }else{
            $_SESSION['mensagem']="Erro ao cadastrar";
            header('Location:Cadastro(materialize).php?ERRO');
        }
    }


?>
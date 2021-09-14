<?php

    //conexão
    require_once 'Conexaodb.php';

    //inicio da sessão

    session_start();


    if(isset($_POST['btn-envia'])){
        
        $erros=array();
        $login=mysqli_escape_string($connect,$_POST['login']);//função que filtra os dados para o user não colocar códigos ;)
        $senha=mysqli_escape_string($connect,$_POST['senha']);

        if(empty($login) or empty($senha))
        {
            $erros[]="<li>O campo login/senha precisam ser preenchidos</li>";

        }else{
            $sql="SELECT login FROM usuarios WHERE login='$login' ";//campo login da tabela usuarios

             $resultado=mysqli_query($connect,$sql);

             if(mysqli_num_rows($resultado) > 0)//numero de linhas nesse resultado é maior que 0
             {
                $senha=md5($senha);//se não utilizarmos essa criptografia, não vai funcionar pois no db a senha está criptografada
                $sql="SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";

                $resultado=mysqli_query($connect,$sql);

                if(mysqli_num_rows($resultado)==1){
                        $dados=mysqli_fetch_array($resultado);//transforma a var dados em array e insere os dados nessa variavel
                        mysqli_close($connect);
                        $_SESSION['logado']=true;
                        $_SESSION['id_usuario']=$dados['id'];
                        header('Location:home.php');//função para redirecionar páginas
                }else{
                    $erros[]="<li>Usuários/senha estão incorretas</li>";
                }


             }else{
                 $erros[]="<li>Usuário inexistente</li>";
             }
        }

    }

    mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h1>Login</h1>

        <?php

        if(!empty($erros))
        {
            foreach($erros as $erro){
                echo $erro;
            }
        }

        ?>
    <hr>
        <form action="Login.php" method="post">
        

            <label for="">Nome</label><input type="text" name="login" id=""><br>
            <label for="">Senha</label><input type="password" name="senha" id=""><br>
            <input type="submit" value="Enviar" name="btn-envia">

        </form>


</body>
</html>
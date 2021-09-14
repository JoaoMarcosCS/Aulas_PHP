<?php

    require_once 'Conexaodb.php';

    session_start();//sessão iniciada para podermos utilizar os dados do login.php

    //verificação- pois o usuario pode acessar essa página sem ter logado
    if(!isset($_SESSION['logado']))
    {
        header('Location:Login.php');
    }
    
    $id=$_SESSION['id_usuario'];
    $sql="SELECT * FROM usuarios WHERE id = '$id'";
    $resultado=mysqli_query($connect,$sql);
    $dados=mysqli_fetch_array($resultado);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Home</title>
</head>
<body>
    <h1>Olá <?php echo $dados['nome'];?></h1>

    <br>

    <h3><a href="Logout.php">Sair</a></h3>
</body>
</html>
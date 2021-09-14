<?php

        $senha="MaconhaENeblina";

        $base64=base64_encode($senha);

        echo "<br>".$base64;
        $base64=base64_decode($base64);
        echo "<br>".$base64;

        echo "<hr>Senha em md5: ".md5($base64);
        echo "<br>OBS:O md5 só pode ser criptografado!<br>";
        echo "<hr>Senha em md5: ".sha1($base64);
        echo "<br>OBS:O sha1 só pode ser criptografado!<br>";
        echo "<br><br>As senhas de md5 e sha1 podem ser descriptografadas, então utilize senhas seguras<br><br>";
        echo "<br><br>Para o cadastro no banco de dados, nós criptografamos a senha colocada pelo user e comparamos ao db";

        $opcao=[
            'cost' => 10,//quanto maior o cost mais segura a senha e mais hardware é necessário para gerar as senhas
        ];

        $senha="123456";
        $senhasegura=password_hash($senha,PASSWORD_DEFAULT,$opcao);
        echo "<br><br>Com password_hash:$senhasegura<br><br>";
        $senha_db="$2y$13$3vr0n25TPOhZRFdNGuxDi.Xpn.COpuQg8P7uqlc05y8bFFpk.18S6";
        if(password_verify($senha,$senha_db)){
            echo "<br>Senha válida<br>";
        }else{
            echo "Senha incorreta";
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Criptografia.php" method="post"></form>
</body>
</html>
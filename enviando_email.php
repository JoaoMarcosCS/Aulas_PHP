<?php
               
                    $nome ="João";
                    $email ="jmcsjoaomarcos@gmail.com";
                    $menssagem ="Testando a função/método mail do php";
                    // escrevendo email
                    $to = "joao.mc.silva@unesp.br";
                    $subject = "Mensagem usuário - Teste";
                    $body = "Nome: $nome \r\n".
                            "Email: $email \r\n".
                            "Messagem: $menssagem";
                    $header = "From:joao.mc.silva@unesp.br \r\n".
                                 "Reply-To: $email \r\n".
                                 "X=Mailer:PHP/".phpversion();
                    if (mail($to,$subject, $body, $header)) {
                        echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
                        //echo "javascript:window.location='index.php';</script>";
                    } else {
                        echo "<script type='javascript'>alert('Ops, ocorreu algum erro, verifique as informações');";
                        //echo "javascript:window.location='index.php';</script>";
                    }
                
            ?>
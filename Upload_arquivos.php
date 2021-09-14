<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        if(isset($_POST['envia-form'])):

                $formatos=array("png","jpeg","jpg","gif");
                $extensao=pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

                if(in_array($extensao,$formatos)):


                    $pasta="arquivos/";
                    $temporario=$_FILES['arquivo']['tmp_name'];
                    $novonome=uniqid().".$extensao";

                    if(move_uploaded_file($temporario,$pasta.$novonome)):


                        $mensagem="Upload feito com sucesso KRL!!";

                    else:
                        $mensagem="Não foi possível fazer o upload";

                    endif;

                else:
                    $mensagem="Formato inválido";
                endif;
                echo "$mensagem";


        endif;


    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

        <input type="file" name="arquivo" id=""><br>
        <input type="submit" name=envia-form value="Enviar"><br>

    </form>


</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            
        <?php


        $nota=55;

        if($nota>=70)
        {
            echo "<font color=blue>Aprovado</font>";
        }else if($nota<70 & $nota>=50)
        {
            echo "<font color=orange>Recuperação</font>";
        }else{

            echo "<font color=red>Reprovado</font>";

        }

        ?>

</body>
</html>
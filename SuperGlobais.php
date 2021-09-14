<?php


        $x=17;
        $y=99;


        function soma()
        {
            //return $x + $y; não podemos por causa do escopo
            return $GLOBALS['x']+$GLOBALS['y'];
        }

        $jm=soma();

        echo $jm;

        echo '<br>';

        echo $_SERVER['PHP_SELF']."<br>";
        echo $_SERVER['SERVER_NAME']."<br>";
        echo $_SERVER['SCRIPT_FILENAME']."<br>";
        echo $_SERVER['DOCUMENT_ROOT']."<br>";
        echo $_SERVER['SERVER_PORT']."<br>";
        echo $_SERVER['REMOTE_ADDR']."<br>";
?>
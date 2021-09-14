<?php

    session_start();
    session_unset();//limpa os dados da sessão
    session_destroy();
    header('Location:Login.php');


?>
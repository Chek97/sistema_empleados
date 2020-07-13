<?php
    //destruimos la session para que no siga apareciendo el mensaje
    session_start();
    session_destroy();
    header('location: ../Vista/principal.php');

?>
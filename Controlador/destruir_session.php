<?php

    if(isset($_GET['id'])){

        if($_GET['id'] == 'empleador'){
            session_start();
            session_destroy();
            header('location: ../Vista/principal.php');
        }else{
            session_start();
            session_destroy();
            header('location: ../Vista/principal.php');
        }
    }


?>
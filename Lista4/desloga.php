<?php
     session_start();
     $logado = $_SESSION["logado"];
     $usuario = $_SESSION["usuario"];

    if($logado == "true"){
        session_destroy();
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }

?>
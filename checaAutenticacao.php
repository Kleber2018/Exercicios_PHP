<?php
    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    $verificador[0] = array(
        'usuario' => "kleber",
        'senha' => "123"
    );
    $verificador[1] = array(
        'usuario' => "Leandro",
        'senha' => "123"
    );
    $verificador[2] = array(
        'usuario' => "adm",
        'senha' => "333"
    );

    session_start();
    $vr=true;
    foreach($verificador as $linha){
        if($usuario == $linha['usuario'] && $senha == $linha['senha']){
            $_SESSION['logado'] = "true";
            $_SESSION['usuario'] = $usuario;
            header("location: index.php");
            $vr=false;
        }
    }
    if($vr){
        header("location: login.php");
    }
    if(isset($_SESSION["logado"]) && $_SESSION["logado"] == "true"){
        header("location: index.php");
    }
   



?>

<?php
    $lista_usuarios = [
        ["nome" => "Marcos", "idade" => "50"],
        ["nome" => "Zé", "idade" => "35"],
        ["nome" => "Bira", "idade" => "60"],
        ["nome" => "Julia", "idade" => "30"]
    ];
    header('Content-Type: text/json');
    echo json_encode ($lista_usuarios);
?>
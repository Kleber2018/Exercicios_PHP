<?php
    if(isset($_POST["nome"])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        //inserindo um novo dado no banco da tabela usuario
        $bd->query("INSERT INTO usuarios(nome, idade) VALUES('${nome}','${idade}')");
        // Recuperar o ID inserido, via auto incremento
        $id_inserido = $bd->insert_id;
    }


?>
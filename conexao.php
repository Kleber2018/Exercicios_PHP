<?php
    $bd = new mysqli('localhost', 'root', '', 'Aula11Web');
    if($bd->connect_errno){
        throw new Exception('Erro na conexão'.$conexao->connect_error);
    }
    $bd->set_charset("utf-8");
    // create table usuarios(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(20), idade int);
?>
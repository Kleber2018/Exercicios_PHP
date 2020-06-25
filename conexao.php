<?php
    $bd = new mysqli('localhost', 'root', '', 'aula11web');
    if($bd->connect_errno){
        throw new Exception('Erro na conexão'.$bd->connect_error);
    } else {
        echo 'conexão bem sucedida';
    }
    $bd->set_charset("utf-8");
    // create database aula11web;
    //create table usuarios(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(20), idade int);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Lista 7 Exercício ROTAS HOME</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/pricing.css">

</head>
<body>

<!-- Construa uma aplicação que possibilite o controle de tarefas ao usuário. O usuário pode cadastrar uma nova
tarefa na lista, pode atualizar, remover ou visualizar detalhes. O banco de dados deve conter para cada tarefa
(titulo, descrição, status de conclusão). Na página com a lista das tarefas não concluídas deve haver um link
para uma página que exiba as tarefas concluídas. Todas essas funcionalidades devem ser feitas com banco de
dados MySQL.

CREATE DATABASE AULA11WEB;

USE AULA11WEB;

CREATE TABLE TAREFAS (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
TITULO VARCHAR(30) NOT NULL,
DESCRICAO VARCHAR(70),
STATUS VARCHAR(10)
)

INSERT INTO tarefas(id, TITULO, DESCRICAO, STATUS) VALUES (NULL, 'titulo1','descricao 1', 'concluida');
-->




<main class="l-content information">
    
     <body class="l-box">
        <button onClick="carregar()" type="submit" class="pure-button pure-button-primary pure-u-1-4 pure-u-md-2-8">Carregar Usuários Aync</button>
        <ul id=usuarios></ul>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            function carregar(){
                axios.get("http://localhost/GitHub-PHP/Lista7-PHP/api.php")
                    .then(function(resposta){
                        var usuarios = resposta.data;
                        var lista = document.getElementById("usuarios");
                        usuarios.forEach(function(usuario){
                            lista.ennerHTML += "<li>" + usuario.nome + "</li>";

                        });
                    });
            }
        </script>
    </body><br><br><br><br> 

    <body class="l-box">
        <a href="TelaConcluidas.php">
            <button type="button" class="pure-button pure-button-primary pure-u-1 pure-u-md-4-8">Tarefas Concluídas</button>
        </a><br><br><br><br>
    </body>  <br><br><br><br><br><br><br>
</main> <!-- end l-content -->

<div class="footer l-box">
    <p> Kleber Santos</p>
</div>



</body>
</html>

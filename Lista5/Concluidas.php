<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Lista 5 Exercício 2 &ndash; PHP &ndash; Pure</title>
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
    <legend><h3>TAREFAS CONCLUÍDAS</h3></legend>
     <body class="l-box">
        <?php
            require_once('conexao.php');
            //SELECT
            echo '<table style="width:100%" class="pure-table pure-table-horizontal">';
                echo '<thead>';
                    echo "<td>ID</td> <td>TITULO</td> <td>DESCRICAO</td> <td>STATUS</td>";
                echo '</thead>';
   
                $resultados2 = $bd->query("SELECT * FROM tarefas WHERE STATUS LIKE '%Conc%'");
                echo 'antes do if';
                if($resultados2->num_rows > 0 ){
                    //Para cessar os dados, usar método fetch_array() ou fetch_object
                    while($tarefa = $resultados2->fetch_object()){
                        echo "<tr>";
                            echo "<td>".$tarefa->id."</td>";
                            echo "<td>".$tarefa->TITULO."</td>";
                            echo "<td>".$tarefa->DESCRICAO."</td>";
                            echo "<td>".$tarefa->STATUS."</td>";
                        echo "</tr>";

                    }
                } else {
                    echo "não há usuários cadastrados";
                }
            echo "</table><br><br><br><br><br>";
        ?>

    </body>  <br><br><br><br><br><br>
    <body class="l-box">
        <a href="index2.php">
            <button type="button" class="pure-button pure-button-primary pure-u-1 pure-u-md-4-8">Tarefas Pendentes</button>
        </a><br><br><br><br><br>
        <a href="index.php">
            <button type="button" class="pure-button pure-button-primary pure-u-1 pure-u-md-4-8">Abrir Exercício 1</button>
        </a><br><br><br><br><br><br><br><br>
    </body>  <br><br><br><br><br><br><br>
</main> <!-- end l-content -->

<div class="footer l-box">
    <p> Kleber Santos</p>
</div>



</body>
</html>

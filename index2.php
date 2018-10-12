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
-->




<main class="l-content information">
    <legend><h3>TAREFAS NÃO CONCLUÍDAS</h3></legend>
     <body class="l-box">
        <?php
            require_once('conexao.php');
            //SELECT
            echo '<table style="width:100%" class="pure-table pure-table-horizontal">';
                echo '<thead>';
                    echo "<td>ID</td> <td>TITULO</td> <td>DESCRICAO</td> <td>STATUS</td>";
                echo '</thead>';

                $resultados = $bd->query("SELECT * FROM tarefas");
                if($resultados->num_rows > 0 ){
                    //Para cessar os dados, usar método fetch_array() ou fetch_object
                    while($tarefas = $resultados->fetch_object()){
                        echo "<tr>";
                            echo "<td>".$tarefas->id."</td>";
                            echo "<td>".$tarefas->TITULO."</td>";
                            echo "<td>".$tarefas->DESCRICAO."</td>";
                            echo "<td>".$tarefas->STATUS."</td>";
                        echo "</tr>";

                    }
                } else {
                    echo "não há usuários cadastrados";
                }
            echo "</table><br><br><br><br><br>";
        ?>

        <form method="POST" action="tarefas.php" class="pure-form pure-form-stacked">
            <fieldset>
                <legend><h3>Exercício 2 Inserir</h3></legend>
                <div class="pure-g">
                    <div class="pure-u-1-4 pure-u-md-2-8">
                        <label for="last-name">Titulo</label>
                        <input name="titulo" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    
                    <div class="pure-u-1-4 pure-u-md-2-8">
                        <label for="last-name">Descricao</label>
                        <input name="descricao" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-2-8">
                        <label for="first-name">Status</label>
                        <select name="status" id="first-name" class="pure-input-1">
                            <option>Concluída</option>
                            <option>Pendente</option>
                     </select>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-2-8">
                        <label for="first-name">Status</label>
                        <select name="tipo" id="first-name" class="pure-input-1">
                            <option>Insert</option>
                     </select>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary pure-u-1-4 pure-u-md-2-8">Inserir</button>
                </div><br><br>
            </fieldset>
        </form>
    </body> 
    <body class="l-box">
        <form method="POST" action="usuario.php" class="pure-form pure-form-stacked">
            <fieldset>
                <legend><h3>Exercício 1 alterar e excluir</h3></legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-5">
                        <label for="first-name">Nome para pesquisar</label>
                        <input name="nome" id="first-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-5">
                        <label for="first-name">Novo nome</label>
                        <input name="nome1" id="first-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-1-5">
                        <label for="last-name">Idade</label>
                        <input name="idade" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-5">
                        <label for="first-name">Time 2</label>
                        <select name="tipo" id="first-name" class="pure-input-1">
                            <option>Update</option>
                            <option>Delete</option>
                        </select>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary pure-u-1 pure-u-md-1-5">alterar</button>
                </div><br><br>
                <div>
                    <button type="submit" class="pure-button pure-button-primary pure-u-1 pure-u-md-1-5">Listar todos</button>
                </div><br><br><br><br><br>
            </fieldset>
        </form>
    </body> 

    <!-- Construa uma aplicação que possibilite o controle de tarefas ao usuário. O usuário pode cadastrar uma nova
    tarefa na lista, pode atualizar, remover ou visualizar detalhes. O banco de dados deve conter para cada tarefa
    (titulo, descrição, status de conclusão). Na página com a lista das tarefas não concluídas deve haver um link
    para uma página que exiba as tarefas concluídas. Todas essas funcionalidades devem ser feitas com banco de
    dados MySQL. -->
    <body class="l-box">
        <legend><h3>Exercício 2</h3></legend>
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

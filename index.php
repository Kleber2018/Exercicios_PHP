<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Lista 5 Exercíco 1 &ndash; PHP &ndash; Pure</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/pricing.css">

</head>
<body>

<main class="l-content information">
     <body class="l-box">
        <form method="POST" action="usuario.php" class="pure-form pure-form-stacked">
            <fieldset>
                <legend><h3>Exercício 1 Inserir</h3></legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-3-8">
                        <label for="first-name">Nome</label>
                        <input name="nome" id="first-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-2-8">
                        <label for="last-name">Idade</label>
                        <input name="idade" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-8">
                        <label for="first-name">Time 2</label>
                        <select name="tipo" id="first-name" class="pure-input-1">
                            <option>Insert</option>
                     </select>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary pure-u-1 pure-u-md-1-8">Ok</button>
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
    <?php $i =0; ?>
    <body class="l-box">
        <legend><h3>Exercício 2</h3></legend>
        <a href="index2.php">
            <button type="button" class="pure-button pure-button-primary pure-u-1 pure-u-md-4-8">Abrir Exercício 2</button>
        </a><br><br><br><br><br><br><br><br>
    </body>     
</main> <!-- end l-content -->

<div class="footer l-box">
    <p> Kleber Santos</p>
</div>



</body>
</html>

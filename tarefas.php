<?php
    echo'<br>';
    require_once('conexao.php');
    if(isset($_POST['tipo'])){
    $codigo = $_POST['id'];

    //DELETE
    if($_POST['tipo'] == "Delete"){
        $bd->query("DELETE FROM tarefas WHERE id like '$codigo'");
        echo '<br> detete bem sucedido <br>';
    //UPDATE
    } elseif($_POST['tipo'] == "Update") {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];
        $bd->query("UPDATE tarefas SET TITULO='$titulo', DESCRICAO='$descricao', STATUS='$status' WHERE id like '$codigo'");
        echo "<br> Update bem sucedido $nome<br>";
    // INSERT
    } elseif($_POST['tipo'] == "Insert") {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];
        echo 'entrou dentro do if inserção';
        //inserindo um novo dado no banco da tabela usuario
        $bd->query("INSERT INTO tarefas(id, TITULO, DESCRICAO, STATUS) VALUES (NULL, '${titulo}', '${descricao}', '${status}')");//TESTAR MELHOR
        // Recuperar o ID inserido, via auto incremento
        $id_inserido = $bd->insert_id;
        
        }
    }
    header('Location: index2.php');
?>
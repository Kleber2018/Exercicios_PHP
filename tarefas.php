<?php
    echo'<br>';
    if(isset($_POST['tipo'])){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    //DELETE
    if($_POST['tipo'] == "Delete"){
        $bd->query("DELETE FROM usuarios WHERE nome like '$nome'");
        echo '<br> detete bem sucedido <br>';
    //UPDATE
    } elseif($_POST['tipo'] == "Update") {
        $novonome = $_POST['nome1'];
        $bd->query("UPDATE usuarios SET nome='$novonome' WHERE nome like '$nome'");
        echo "<br> Update bem sucedido $nome<br>";
    // INSERT
    } elseif($_POST['tipo'] == "Insert") {
        echo 'entrou dentro do if inserção';
        //inserindo um novo dado no banco da tabela usuario
        $bd->query("INSERT INTO tarefas(id, TITULO, DESCRICAO, STATUS) VALUES (NULL, '${titulo}', '${descricao}', '${status}')");//TESTAR MELHOR
        // Recuperar o ID inserido, via auto incremento
        $id_inserido = $bd->insert_id;
        
        }
    }
    header('Location: index2.php');
?>
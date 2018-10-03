<?php
 echo "<h3>TELA USUARIOS</h3>";
 require_once('conexao.php');
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        //inserindo um novo dado no banco da tabela usuario
        $bd->query("INSERT INTO usuarios('id', 'nome', 'idade') VALUES (NULL, '${nome}','${idade}')");//TESTAR MELHOR
        // Recuperar o ID inserido, via auto incremento
        $id_inserido = $bd->insert_id;

    }
    //SELECT
    $resultados = $bd->query("SELECT * FROM usuarios");
    if($resultados->num_rows > 0 ){
        //Para cessar os dados, usar método fetch_array() ou fetch_object
        while($usuario = $resultados->fetch_object()){
            echo "<li>".$usuario->nome."</li>";
        }
    } else {
        echo "não há usuários cadastrados";
    }
    //DELETE
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $bd->query("DELETE FROM usuarios WHERE id='1'");
    }
    //UPDATE
    $bd->query("UPDATE usuarios SET nome='alterado' WHERE id = '5'");

?>
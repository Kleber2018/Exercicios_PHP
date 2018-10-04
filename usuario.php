<?php
 echo "<h3>TELA USUARIOS</h3>";
 require_once('conexao.php');
    if(isset($_POST['nome'])){
        
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
    echo'<br>';
    if(isset($_POST['tipo'])){
        echo $_POST['tipo'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        //DELETE
        if($_POST['tipo'] == "Delete"){
            $bd->query("DELETE FROM usuarios WHERE nome like '$nome'");
            echo '<br> detete bem sucedido <br>';
        //UPDATE
        } elseif($_POST['tipo'] == "Update") {
            $novonome = $_POST['nome1'];
            $bd->query("UPDATE usuarios SET nome='$novonome' WHERE nome like '$nome'");
            echo "<br> Update bem sucedido $nome<br>";
        //INSERT
        } elseif($_POST['tipo'] == "Insert") {
            echo 'entrou dentro do if inserção';
            //inserindo um novo dado no banco da tabela usuario
            $bd->query("INSERT INTO usuarios('id', 'nome', 'idade') VALUES (NULL, '${nome}','${idade}')");//TESTAR MELHOR
            // Recuperar o ID inserido, via auto incremento
            $id_inserido = $bd->insert_id;
            
        }
    }
    echo'<br>';
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
?>
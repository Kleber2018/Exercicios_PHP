
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
    // Crie um arquivo PHP chamado functions.php​, que deve conter uma biblioteca de funções para realizar
    // operações sobre arrays. Você deve criar funções para encontrar: o maior valor, menor valor, número de
    // valores do array, média, ordenação e busca de um valor (retorna true ou false). Em seu arquivo index.php
    // você deve importar esta biblioteca de funções e fazer testes nas funções com valores estáticos.

    require('functions.php');

    for($i = 0; $i < 11; $i++){
        $vetor[$i] = rand(2,20);
        echo "$vetor[$i]; ";
    }
    echo '</br> O Menor valor é: ';
    echo menorValor($vetor);
    echo '</br> O Maior valor é: ';
    echo maiorValor($vetor);

    echo '</br> Antes de ordenado: ';
   
    print_r($vetor);
    echo '</br> Depois de ordenado: ';
    $ordenado = ordenacao($vetor);
    print_r($ordenado);
    echo '</br> Depois de ordenado: ';
    foreach($ordenado as $chave => $valor){
        echo "<strong>${chave}</strong> - ${valor}; ";
    }
?>



    
</body>
</html>
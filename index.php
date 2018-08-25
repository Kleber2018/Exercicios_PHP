
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

        for($i = 0; $i < 5; $i++){
            $vetor[$i] = rand(2,20);
            echo "$vetor[$i]; ";
        }

        echo maiorValor($vetor);

        echo menorValor($vetor);

        echo tamanhoArray($vetor);

        $ordenado = ordenacao($vetor);
        foreach($ordenado as $chave => $valor){ //como se fosse um for percorrendo o vetor inteiro
        echo "<strong>${chave}</strong> - ${valor}; ";
        }

        if (busca($vetor, 3)){
            echo 'true';
        }else{
            echo 'false';
        }
    ?>   
</body>
</html>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        
    <?php
    /*Abrir o XAMPP e um editor (IDE) para testar os exemplos apresentados na Aula 2. Você pode testar
    diretamente no navegador ou usando o php no terminal (cmd), executando php seu-codigo.php
    Lembre-se de salvar seus aplicativos na pasta C://xampp/htdocs/pasta-do-seu-projeto
    a) Teste o operador de identidade === com duas variáveis, $a = 10 e $b = '10'
    b) Teste o operador spaceship para a diferentes valores para $a <=> $b
    c) Testar as operações aritméticas entre tipos diferentes de dados;
    */
    echo '</br> Questão 1 a:</br>';
    $a = 10;
    $b = '10';

    if($a == $b):
        if($a === $b):
            echo 'Valores e as variáveis são iguais! </br>';
        else:
            echo 'Os valores são iguais mas as variáveis são diferentes!</br>';
        endif;
    else:
        echo 'Os valores são diferentes!</br>';
    endif;

    echo '</br> Questão 1 b:</br>';
    $a = 5;
    $b = 6;
    $retorno = $a <=> $b;
    echo "Quando $a <=> $b = $retorno </br>";

    $a = 6;
    $b = 5;
    $retorno = $a <=> $b;
    echo "Quando $a <=> $b = $retorno </br>";

    $a = 5;
    $b = 5;
    $retorno = $a <=> $b;
    echo "Quando $a <=> $b = $retorno </br>";

    echo '</br> Questão 1 c:</br>';

    echo $a * $b;
    $a = '10';
    echo $a * $b;


    /*2 - Faça uma função que receba três notas e retorna a média entre elas. O script PHP principal deve chamar
    e usar o retorno desta função para exibir a situação final do aluno, sendo:
    a) "aprovado" com média maior ou igual a 7;
    b) "prova final" com média maior ou igual a 4 e menor que 7;
    c) "reprovado" com média menor que 4
    */
    echo '</br> Questão 2:</br>';
    function media($nota1, $nota2, $nota3)
    {
        $resultado = ($nota1 + $nota2 + $nota3)/3;
        return $resultado;
    }

    $vr = media(8,3,5);

    if($vr >= 7):
        echo 'Aprovado';
    elseif ($vr >= 4):
        echo 'Prova final';
    else :
        echo 'Reprovado';
    endif;

    /*
    3 - Faça um script PHP que considere valores para a altura (h) e o sexo de uma pessoa (M - masculino e F -
    feminino), e invoque uma função que calcula o peso ideal desta pessoa de acordo com o sexo, utilizando
    as fórmulas:
    a) para homens: (72.7 * h) - 58
    b) para mulheres: (62.1 * h) - 44.7
    O resultado deve ser mostrado na tela do navegador com a função echo​.
    */
    echo '</br></br> Questão 3:</br>';
    $altura = 1.74;
    $sexo = 'M';
    if ($sexo =='M'):
        pesoIdealMasc($altura);
    elseif ($sexo == 'F'):
        pesoIdealFem($altura);
    endif;

    function pesoIdealMasc($h)
    {
        echo 'peso ideal masculino é: ', (72.7 * $h) - 58;
    }

    function pesoIdealFem($h)
    {
        echo 'peso ideal femínino é:', (62.1 * $h) - 44.7;
    }

    /*
    4 - Faça um script PHP que contenha e use uma função para verificar o menor entre três números. Sua função deve
    receber como parâmetros três números e retornar o menor entre eles. Obs: se os números forem iguais, o bloco
    principal do script PHP não deve chamar a função que verifica o maior e deve exibir a mensagem "Os números
    são iguais!​".
    */
    echo '</br></br> Questão 4:</br>';

    $vl1 = 2;
    $vl2 = 3;
    $vl3 = 4;

    if ($vl1 != $vl2 and $vl2 != $vl3 and $vl1 != $vl3):
        echo 'O menor valor é: ', menor($vl1, $vl2, $vl3);
    else:
        echo 'Os números são iguais!';
    endif;

    function menor($n1, $n2, $n3)
    {
        if ($n1 < $n2):
            if ($n1<$n3):
                return $n1;
            else:
                return $n3;
            endif;
        else:
            if ($n2<$n3):
                return $n2;
            else:
                return $n3;
            endif;
        endif;
    }
    //5 - Faça um script PHP para mostrar o resultado do cálculo da série harmônica, a partir de um valor definido na
    //variável $n​. Obs: considere o n​-ésimo número harmônico como:
    echo '</br></br> Questão 5:</br>';
    $n = 7;
    echo somatoriaHarmonica($n);

    function somatoriaHarmonica($numero){
        $soma = 0;
        for($i = 1; $i <= $numero; $i++){
            $soma = $soma+1/$i;
        }
        return $soma;
    }

    //6 - Crie e utilize uma função em PHP para verificar se um número é primo.
    echo '</br></br> Questão 6:</br>';

    $num = 13;

    if (primo($num) == 2):
            echo "O número $num é primo!";
    else:
            echo "O número $num não é primo!";
    endif;

    function primo($num){
        $div = 0;
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) { 
            $div++;
            }
        }
        return $div;
    }

    // 7 - Construa um script em PHP para calcular e mostrar no navegador todos os números primos entre 1 e 100, inclusive eles.
    echo '</br></br> Questão 7:</br>';

    echo 'Os números: 1, ';
    for($i = 1; $i <= 100; $i++){
        if (primo($i) == 2):
                echo "$i,";
        endif;
    }
    echo ' são Primos';

    // 8 - Efetue um algorítmo PHP que dado valores para as variáveis A, B e imprima-as em ordem crescente em relação
    //aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
    echo '</br></br> Questão 8:</br>';
        $A = 4;
        $B = 2;

        if($A < $B):
            echo "Em ordem crescente: $A $B";
        elseif($A > $B):
            echo "Em ordem crescente: $B $A";
        else:
            echo 'Os valores são iguais';
        endif;
    //9 - Crie um algorítmo PHP que utiliza dois valores quaisquer salvos em duas variáveis (A e B) e, então, imprime
    //todos os valores intermediários a ele, veja exemplo: A = 5, B = 15, Imprime: 6 7 8 9 10 11 12 13 14
    echo '</br></br> Questão 9:</br>';
        $A = 5;
        $B = 15;
        echo "Os valores entre $A e $B são: ";
        for($A+1; $A <$B; $A++){
            ECHO "$A, ";
        }

    //10 - Crie uma função em PHP que receba duas strings, e descubra se elas são iguais ou diferentes. Com o retorno da
    //   função, você deve imprimir na tela “IGUAL” ou “DIFERENTE”.
    echo '</br></br> Questão 10:</br>';

    $tx1 = 'kleber';
    $tx2 = 'kleber';

    if($tx1==$tx2){
        echo 'São iguais';
    }else{
        echo 'São diferentes';
    }

    
    ?>

    <!-- 11 - Utilizar a função echo do PHP para imprimir a mensagem "Olá mundo" na tela do navegador. Utilize um
    cabeçalho HTML (h1, h2, h3 ... ) para a mensagem ter destaque. Esta é a primeira integração entre HTML e PHP. -->
    <?php echo '</br></br> Questão 11:</br>'; ?>
    <h1><?php echo 'Olá Mundo' ?></h1>

    <?php
        // 12) Criar uma variável no PHP chamada $link contendo o valor 'http://www.utfpr.edu.br' e uma segunda variável
        // chamada $label, que será o título do link com o valor 'UTFPR'. Em seguida, você deve renderizar via PHP (função
        // echo) um link HTML usando as variáveis $link e $titulo, e os conceitos de interpolação e renderização de
        // variáveis em strings no PHP.
    
        $link = 'http://www.utfpr.edu.br';
        $label = 'UTFPR';
    ?>
     <a href=<?= $link ?>>
        <?php echo "O site da $label é $link"?>    
    </a>

</body>
</html>
<?php
    function menorValor($valores){
        echo '</br> O Menor valor é: ';
        return min($valores);
    }

    function maiorValor($valores){
        echo '</br> O Maior valor é: ';
        return max($valores);
    }
   
    function tamanhoArray($valores){
        echo '</br> Numero de elementos do array: ';
        return count($valores);
    }

    function media($valores){
        echo '</br> A média dos numeros é: ';
        return array_sum($valores) / count($valores);
    }

    function ordenacao($valores){
        echo '</br> Antes de ordenado: ';
        print_r($valores);//imprime o vetor inteiro
        echo '</br> Depois de ordenado: ';
        sort($valores);
        return $valores;
    }

    function busca($valores, $num){
        echo "</br> A busca do $num retornou: ";
        foreach($valores as $valor){ //como se fosse um for percorrendo o vetor inteiro
            if ($valor == $num) {
                return true;
            }
        }
        return false;
    }


    // Exercício 2
    function checaResultado($valores, $num){
        $qtd = 0;
        foreach($valores as $valor){ //como se fosse um for percorrendo o vetor inteiro
            if ($valor == $num) {
                $qtd = $qtd +1;
            }
        }
        return $qtd;
    }
    
    //Exercício 3
    function separa($tx){
        $vetor1 = explode('#', $tx);
        $vetor2 = explode(',', $vetor1[1]);
        $result = array_merge($vetor1, $vetor2);
                  
        $ar = array(
            'family' => "Family $vetor1[0]",
            'pet' => $result[2],
            'names' => [$vetor2[0], $vetor2[1], $vetor2[2]]
        );

        return $ar;
    } 

    //Exercício 5
    function somavendas($vendas){
        $vendames = 0;
        for($i = 0; $i < 5; $i++){                       
            for($j = 0; $j < 4; $j++){
               $vendames = (double) $vendames + $vendas[$i][$j];
            }
        }
        return $vendames;
    }
    
?>

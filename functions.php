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

    
?>

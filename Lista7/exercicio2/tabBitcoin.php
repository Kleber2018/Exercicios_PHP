<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


function carregarTabela(){
    $url = 'https://api.coindesk.com/v1/bpi/historical/close.json?currency=BRL&start=2018-01-01&end=2018-05-10';
    $client = new Client();
    $client->getAsync($url)->then(
        function ($bpi) {
            echo '<h1>cotaçao</h1>';
            $tabCotacao = json_decode($bpi->getBody());
           // var_dump($tabCotacao);
            echo '<table>';
                echo '<thead>';
                    echo "<td>Data</td> <td>Cotação</td>";
                    echo '</thead>';
                echo '<tbody>';
                foreach ($tabCotacao->bpi as $chave=>$tCotacao){
                    echo "<tr>";
                        echo "<td>".$chave."  -  </td>";
                        echo "<td> R$ ".$tCotacao."</td>";
                    echo "</tr>";
                }
                echo '</tbody>';
            echo '</table>';
        }



    )->wait();
}

carregarTabela();


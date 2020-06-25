<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

function requisicao(){
    $url = 'http://content.guardianapis.com/search?api-key=test';
    $client = new Client();
    $client->getAsync($url)->then(
        function ($response) {
            echo '<h1>Noticias</h1>';
            $noticias = json_decode($response->getBody());

            foreach ($noticias->response->results as $noticia){
                $titulo = $noticia->webTitle;
                echo "<li>${titulo}</li>";
            }
        }
    )->wait();

}
requisicao();
    

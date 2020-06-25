<?php
//Kleber
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
//use GuzzleHttp\Psr7\Request;

class BitcoinController extends Controller
{
    public function index(){

        //requisição assincrona que abre automaticamente
        $url = 'https://api.coindesk.com/v1/bpi/currentprice/BRL.json';
        $client = new Client();
        $cota = array();
        $brl = array();
        $t = $client->getAsync($url)->then(
            function ($bpi) {
                $tabCotacao = json_decode($bpi->getBody());
                //var_dump($tabCotacao);
                foreach ($tabCotacao->bpi as $chave=>$tCotacao){
                      $cota[] = $tCotacao;
                    }
                    return $cota;
            }
        )->wait();

        foreach($t[1] as $chave=>$valor){
            $brl[] = $valor;
            
        }

        return view('bitcoin', ['cotacaoBitcoin' => $brl[3]]);
    }

    public function historyBitcoin(){

        $tabBitValor = $this->carregarTabelaValor();
        $tabBitData = $this->carregarTabelaData();
        echo '</br>';
        //print_r($tabBitData);

        $cotacoes = ["valor" => $tabBitValor, "data" => $tabBitData];

         $count = count($cotacoes['valor']);


        return view('history', ['tabBitcoin' => $cotacoes, 'quantidade'=>$count]);

    }

    public function carregarTabelaData(){
        $url = 'https://api.coindesk.com/v1/bpi/historical/close.json?currency=BRL&start=2018-01-01&end=2018-05-10';
        $client = new Client();
        $cota = array();
        $chav = array();
        $tab = $client->getAsync($url)->then(
            function ($bpi) {
                $tabCotacao = json_decode($bpi->getBody());
                foreach ($tabCotacao->bpi as $chave=>$tCotacao){
                    $chav[] = $chave;
                    $cota[] = $tCotacao;
                }
                return $chav;

            }
        )->wait();
        return $tab;
    }


    public function carregarTabelaValor(){
        $url = 'https://api.coindesk.com/v1/bpi/historical/close.json?currency=BRL&start=2018-01-01&end=2018-05-10';
        $client = new Client();
        $cota = array();
        $chav = array();
        $tab = $client->getAsync($url)->then(
            function ($bpi) {
                $tabCotacao = json_decode($bpi->getBody());
                foreach ($tabCotacao->bpi as $chave=>$tCotacao){
                      $chav[] = $chave;
                      $cota[] = $tCotacao;
                    }
                    return $cota;

            }
        )->wait();
         return $tab;
    }
    
 

}






    
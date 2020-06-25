<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
    <h1> bit Coin </h1>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    <script>
            axios.get("https://api.coindesk.com/v1/bpi/currentprice/BRL.json​")
                .then(response => {
                    showResults (response.data)
                })
    </script>

<script>
    function showResults (address) {
        // Mostra a div com o resultado
        document.getElementById('results').style.display = "block"
    
        // Mostra os resultados:
        document.getElementById('results').innerHTML = `
            <p><b>Cotação: </b> ${bpi.BRL.code} </p>
        `
    }
</script>

    <div id="results" style="display: none;"></div>
</html>
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
  
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    <script>
    //requisição assincrona que abre automaticamente
            axios.get("https://api.coindesk.com/v1/bpi/currentprice/BRL.json​")
            .then(resposta => {
                            console.log(resposta);
                            var cotacao = resposta.data;
                            document.getElementById('cotando1').innerHTML = cotacao.bpi.BRL.rate;
                             })
                        .catch(error => {
                            console.log(error)
                     })
    
        //requisição assincrona que executa quando clicado no botão Carregar
        function carregar() {
            axios.get("https://api.coindesk.com/v1/bpi/currentprice/BRL.json")
                .then(function(resposta){
                    var cotacao = resposta.data;
                    var lista = document.getElementById("cotando");
                        lista.innerHTML = "<li>" + cotacao.bpi.BRL.rate + "</li>";
                })
        }
        function geraTab(){
             require_once('tabBitcoin.php')
        }
 
    </script>
    <body>
    <div>
        <h1> Preço atual do Bitcoin</h1>
        <h2 id="cotando1"></h2><br>

        <button onClick="carregar()">Carregar Cotação Bitcoin</button>
        <p id="cotando"></p><br>
    </div>
    <h1> Tabela com histórico 2018 do Bitcoin</h1>
    
    <a href="tabBitcoin.php">
        <!-- < ?php require_once('tabBitcoin.php')?> -->
            <button type="button">Abrir Exercício 2</button>
    </a><br>



</body>
    
</html>

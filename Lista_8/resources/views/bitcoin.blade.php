<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    <script>

    </script>
    <body>
    <div>
        <h1> Preço atual do Bitcoin</h1>
        <h1>{{$cotacaoBitcoin}}</h1>

        <button onClick="bitcoin/history" method="GET">Carregar Cotação Bitcoin</button>
        <p id="cotando"><h3>{{$cotacaoBitcoin}}</h3></p><br>
    </div>
 
    <!-- <form id="form_cadastro" action="http:/>/apropriacao/ServicoTela" method="POST">


<div class="field">
    <label for="titulo-os" class="label">Informe o Código da Ordem de Servico</label>
    <div class="control has-icons-left">
        <input type="text" class="input"  name="os-codigo" placeholder="QD:026 ou QD026" value="" required>
        <span class="icon is-small is-left">
            <i class="fas fa-map-signs"></i>
        </span>
    </div>
</div>


</br>

<!--Redireciona para ServicoController function servicoApropriacaoHH-->
<!-- <div class="control">
<div class="field">
    <button type="submit" class="button is-link" >Buscar</button>
</div>
</div>
</form> -->




</body>
    
</html>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive pricing table.">
        <title>Lista 3 &ndash; PHP &ndash; Pure</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="css/layouts/pricing.css">

    </head>
<?php
    session_start();
    $logado = $_SESSION["logado"];
    $usuario = $_SESSION["usuario"];

    if($logado == "true"){
        echo "Olá ${usuario}! Você já está logado";
    } else {
        header('Location: login.php');
    }
?>

<main class="l-content information" class="l-box">
<div class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading pure-menu-link">BRAND</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">News</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sports</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Login</a></li>
    </ul>
</div>
    <body>
        <legend><h3>Exercício 1</h3></legend>
        <form method="POST" action="familia.php">
            <div class="pure-g">
                <div class="pure-u-2-3 pure-u-md-2-5">
                    <label>Informe a String: </label><input value= "Stark#Bran, Arya, Tony#Wolf" type="text" name="conteudo"> <br>
                </div>
                <div class="pure-u-1-3 pure-u-md-1-5">  
                    <button type="submit" class="pure-button pure-button-primary"> Enviar</button>
                </div>
            </div>
        </form>
    </body>
    <body>
        <legend><h3>Exercício 2 e 3</h3></legend>
        <a href="vendas.php">
            <button type="button" class="pure-button pure-button-primary pure-u-1 pure-u-md-2-5">Abrir Exercício 2 e 3</button>
        </a>
    </body>
    <body class="l-box">
        <form method="GET" class="pure-form pure-form-stacked" action="time.php">
            <fieldset>
                <legend><br><h3>Exercício 4</h3></legend>
                <legend><h4>Informe 2 times para comparar</h4></legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-2-5">
                    <label for="first-name">Time 2</label>
                        <select name="time1" id="first-name" class="pure-input-1" required>
                        <option>Corinthians</option>
                            <option>Santos</option>
                            <option>Palmeiras</option>
                            <option>Grêmio</option>
                            <option>Cruzeiro</option>
                            <option>Vasco</option>
                            <option>Flamengo</option>
                            <option>Atlético-MG</option>
                            <option>Chapecoense</option>
                            <option>Botafogo</option>
                            <option>Atlético-PR</option>
                            <option>São Paulo</option>
                            <option>Bahia</option>
                            <option>Fluminense</option>
                            <option>Sport</option>
                            <option>Avaí</option>
                            <option>Coritiba</option>
                            <option>Vitória</option>
                            <option>Ponte Preta</option>
                            <option>Atlético-GO</option>
                            <?php
                                foreach ($equipes as $linhaarrayequipe) {
                                    echo "<option>";
                                        $linhaarrayequipe['nome-comum'];
                                    echo "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-5">
                    </div>
                    <div class="pure-u-1 pure-u-md-2-5">
                        <label for="first-name">Time 2</label>
                        <select name="time2" id="first-name" class="pure-input-1">
                            <option>Santos</option>
                            <option>Corinthians</option>
                            <option>Palmeiras</option>
                            <option>Grêmio</option>
                            <option>Cruzeiro</option>
                            <option>Vasco</option>
                            <option>Flamengo</option>
                            <option>Atlético-MG</option>
                            <option>Chapecoense</option>
                            <option>Botafogo</option>
                            <option>Atlético-PR</option>
                            <option>São Paulo</option>
                            <option>Bahia</option>
                            <option>Fluminense</option>
                            <option>Sport</option>
                            <option>Avaí</option>
                            <option>Coritiba</option>
                            <option>Vitória</option>
                            <option>Ponte Preta</option>
                            <option>Atlético-GO</option>
                        </select>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary pure-u-1 pure-u-md-2-5">Comparar</button>

                </div><br><br><br><br><br><br><br><br>
                
            </fieldset>
        </form>
    </body>    
</main> <!-- end l-content -->

<div class="footer l-box">
    <p> Kleber Santos</p>
</div>



</body>
</html>

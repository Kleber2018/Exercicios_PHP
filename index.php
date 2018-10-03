<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Lista 5 &ndash; PHP &ndash; Pure</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/pricing.css">

</head>
<body>


<main class="l-content information">
    <body class="l-box">
        <form method="POST" action="usuario.php" class="pure-form pure-form-stacked">
            <fieldset>
                <legend><h3>Exercício 1</h3></legend>

                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-3-8">
                        <label for="first-name">Nome</label>
                        <input name="nome" id="first-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-2-8">
                        <label for="last-name">Idade</label>
                        <input name="idade" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary pure-u-1 pure-u-md-1-8">Gravar POST</button>

                </div><br><br><br><br><br><br><br><br>
                
            </fieldset>
        </form>
    </body> 
    <?php $i =0; ?>
    <body class="l-box">
        <form method="GET" class="pure-form pure-form-stacked">
            <fieldset>
                <legend><h3>Exercício 3</h3></legend>

                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-3-8">
                        <label for="first-name">Nome do vendedor</label>
                        <input name="nome" id="first-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-1-8">
                        <label for="last-name">Semana 1</label>
                        <input name="semana1" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-1-8">
                        <label for="last-name">Semana 2</label>
                        <input name="semana2" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-1-8">
                        <label for="last-name">Semana 3</label>
                        <input name="semana3" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>
                    <div class="pure-u-1-4 pure-u-md-1-8">
                        <label for="last-name">Semana 4</label>
                        <input name="semana4" id="last-name" class="pure-u-23-24" type="text" required>
                    </div>

                    <button type="submit" class="pure-button pure-button-primary pure-u-1 pure-u-md-1-8">Gravar GET</button>

                </div><br><br><br><br><br><br><br><br>
                
            </fieldset>
        </form>
    </body>       
    <a href="index.php">
        <button type="button" class="pure-button pure-button-primary pure-u-1 pure-u-md-1-1">Voltar</button>
    </a><br><br><br><br><br><br><br><br>
</main> <!-- end l-content -->

<div class="footer l-box">
    <p> Kleber Santos</p>
</div>



</body>
</html>

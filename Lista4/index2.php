<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive pricing table.">
        <title>Lista 3 &ndash; PHP &ndash; Pure</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="css/pricing.css">

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
    <a href="index.php" class="pure-menu-heading pure-menu-link">TELA 1</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">nada</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">nada</a></li>
        <li class="pure-menu-item"><a href="desloga.php" class="pure-menu-link">Logout</a></li>
    </ul>
</div>
<div>    
    <h3>Segunda tela</h3></legend>
       
</div><br><br><br><br><br><br><br><br>      
</main> <!-- end l-content -->

<div class="footer l-box">
    <p> Kleber Santos</p>
</div>



</body>
</html>

<?php
//obrigatorio configurar o XAMPP em config: LoadModule rewrite_module modules/mod_rewrite.so

//Rotas definidas pelo usuário
$rotas = [
    "/" => "App/Controllers/home.php",
    "/home" => "App/Controllers/home.php",
    "/usuarios" => "App/Controllers/usuarios.php"
];
//URL que o usuário está tentando acessar
$url = $_SERVER["PATH_INFO"] ?? '/';
//Carregar o controller correspondente a rota
if (array_key_exists($url, $rotas)){
    require($rotas[$url]);
}
else {
    echo "Error 404! A página não existe!!!";
}
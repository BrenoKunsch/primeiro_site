<?php
require_once __DIR__ . '/../vendor/autoload.php';

$router = new Bramus\Router\Router();

$router->get('', function(){
echo var_dump($_POST);
echo ' <form action="/" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" class="input-field" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" class="input-field" required>

            <button type="submit" class="login-button">Entrar</button>
        </form>';
});
$router->post('', function(){
echo var_dump($_POST);
});
$router->put('', function(){
echo var_dump($_POST);
});

// $router->get('/{categoria}', function($categoria){
// echo var_dump($categoria) . "<br>";
// echo var_dump(base64_encode($categoria));
// });

// $router->get('/login', function(){
// echo "Olá, sou a página de login";
// });

$router->run();
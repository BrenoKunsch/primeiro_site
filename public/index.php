<?php
require_once __DIR__ . '/../vendor/autoload.php';

$router = new Bramus\Router\Router();

$router->get('', function(){
echo "Olá, sou a página inicial";
});

$router->get('/login', function(){
echo "Olá, sou a página de login";
});

$router->run();
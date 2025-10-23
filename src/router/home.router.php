<?php
use Controller\TemplateRender;

$router->mount('', function() use($router) {
   $router->get('/', function(){
      TemplateRender::run()->renderMake('pages::home', [
         "title" => "Página Inicial",
         "nome_usuario" => "Breno"
      ]);
   });
});

$router->mount('/login', function() use($router){
   $router->get('/', function(){
      TemplateRender::run()->renderMake('pages::login');
   });

   $router->post('/auth', function(){
      echo var_dump($_POST);
   });
});

$router->mount('/about', function() use($router){
   $router->get('/', function(){
      TemplateRender::run()->renderMake('pages::sobre_nos');
   });
});
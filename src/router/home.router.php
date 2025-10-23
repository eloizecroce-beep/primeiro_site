<?php
use Controller\TemplateRender;

$router ->mount('', function() use ($router) {
    $router ->get('/', function(){
        TemplateRender::run()->renderMake('pages::home', [
        "nome_usuario" => "Breno",
        "Titulo" => "Pagina Inicial"
        ]);
    });
});
$router ->mount('/login', function() use ($router) {
    $router ->get('/', function(){
        TemplateRender::run()->renderMake('pages::login', [
        "nome_usuario" => "Breno",
        "Titulo" => "Pagina de login"
        ]);
    });
    $router ->post('/auth', function(){
        echo var_dump($_POST);
    });
});
$router ->mount('/about', function() use ($router) {
    $router ->get('/', function(){
        TemplateRender::run()->renderMake('pages::about', [
        "Titulo" => "Sobre nós"
        ]);
    });
});
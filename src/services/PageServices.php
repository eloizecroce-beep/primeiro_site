<?php
namespace Services;
use Controller\TemplateRender;
class PageServices{
    public function getHome(): void{
     TemplateRender::run()->renderMake('pages::home', [
        "nome_usuario" => "Breno",
        "Titulo" => "Pagina Inicial"
    ]);
    }

    public function getLogin(): void{ 
        TemplateRender::run()->renderMake('pages::login');
    }

    public function getAbout(): void{
        TemplateRender::run()->renderMake('pages::about');
    }

    public function getprodutos(): void{
        TemplateRender::run()->renderMake('pages::produtos');
    }
    

    public function postAutentication(): void{
        echo var_dump($_POST);
    }
}
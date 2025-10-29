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

    public function getProdutos(){
        $produtos = [
            [
                "Nome" => "Produto 1",
                "Imagem" => "img/personagem.webp",
                "Preco"=> 12.99
            ],
            [
                "Nome" => "Produto 2",
                "Imagem" => "img/personagem.webp",
                "Preco"=> 15.89
            ]
            ];
        
        TemplateRender::run()->renderMake('pages::produtos', [
            "produto" => $produtos
        ]);
    }

    public function postAutentication(): void{
        echo var_dump($_POST);
    }
}
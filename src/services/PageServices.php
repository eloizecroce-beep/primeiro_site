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
            ],
            [
                "Nome" => "Produto 3",
                "Imagem" => "img/cif.jpg",
                "Preco"=> 18.96
            ], 
            [
                "Nome" => "Produto 4",
                "Imagem" => "img/sabão em pó.png",
                "Preco"=> 11.00
            ], 
            [
                "Nome" => "Produto 5",
                "Imagem" => "img/paninho.png",
                "Preco"=> 9.90
            ], 
            [
                "Nome" => "Produto 6",
                "Imagem" => "img/veja banheiro.png",
                "Preco"=> 12.30
            ], 
            [
                "Nome" => "Produto 7",
                "Imagem" => "img/veja-multiuso.jpg",
                "Preco"=> 8.50
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
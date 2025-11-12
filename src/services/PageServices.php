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
                "Imagem" => "img/imagem1.jpeg",
                "Preco"=> 12.99
            ],
            [
                "Nome" => "Produto 2",
                "Imagem" => "img/imagem2.jpeg",
                "Preco"=> 15.89
            ],
            [
                "Nome" => "Produto 3",
                "Imagem" => "img/imagem3.jpeg",
                "Preco"=> 59.99
            ], 
            [
                "Nome" => "Produto 4",
                "Imagem" => "img/imagem4.jpeg",
                "Preco"=> 11.00
            ], 
            [
                "Nome" => "Produto 5",
                "Imagem" => "img/imagem5.jpeg",
                "Preco"=> 9.90
            ], 
            [
                "Nome" => "Produto 6",
                "Imagem" => "img/imagem6.jpeg",
                "Preco"=> 12.30
            ], 
            [
                "Nome" => "Produto 7",
                "Imagem" => "img/imagem7.jpeg",
                "Preco"=> 8.50
            ],
            [
                "Nome" => "Produto 8",
                "Imagem" => "img/imagem8.jpeg",
                "Preco"=> 99.90
            ],
            [
                "Nome" => "Produto 9",
                "Imagem" => "img/imagem9.jpeg",
                "Preco"=> 10.90
            ],
            [
                "Nome" => "Produto 10",
                "Imagem" => "img/imagem10.jpeg",
                "Preco"=> 10.99
            ],
            [
                "Nome" => "Produto 11",
                "Imagem" => "img/imagem11.jpeg",
                "Preco"=> 7,00
            ],
            [
                "Nome" => "Produto 12",
                "Imagem" => "img/imagem12.jpeg",
                "Preco"=> 45.00
            ],
            [
                "Nome" => "Produto 13",
                "Imagem" => "img/imagem13.jpeg",
                "Preco"=> 89.99
            ],
            [
                "Nome" => "Produto 14",
                "Imagem" => "img/imagem14.jpeg",
                "Preco"=> 8.75
            ],
            [
                "Nome" => "Produto 15",
                "Imagem" => "img/imagem15.jpeg",
                "Preco"=> 5.50
            ],
            [
                "Nome" => "Produto 16",
                "Imagem" => "img/imagem16.jpeg",
                "Preco"=> 14.50
            ],
            [
                "Nome" => "Produto 17",
                "Imagem" => "img/imagem17.jpeg",
                "Preco"=> 9.50
            ],
            [
                "Nome" => "Produto 18",
                "Imagem" => "img/imagem18.jpeg",
                "Preco"=> 15.50
            ],
            [
                "Nome" => "Produto 19",
                "Imagem" => "img/imagem19.jpeg",
                "Preco"=> 39.99
            ],
            [
                "Nome" => "Produto 20",
                "Imagem" => "img/imagem20.jpeg",
                "Preco"=> 15.50
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
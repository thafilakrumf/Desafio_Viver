<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instruções do Desafio

    O desafio consiste no desenvolvimento de um software básico com duas páginas. A primeira é referente ao formulário de cadastro e a segunda consiste na tabela com todos os clientes cadastrados. Os dados devem ser salvos em um Banco MySql através do PHP. Na página de cadastro, deve ser confirmado a senha corretamente e a verificação dessa informação deve ser feita através de Javascript.

## Instruções de Inicialização de Projeto


Clone o projeto do github


    $ git clone https://github.com/thafilakrumf/Desafio_Viver.git



Instale o composer dentro do projeto com o comando


    $ composer install



Renomeie ou copie e cole .env.exemple para .env.


Crie um banco de dados MySQL com o nome "desafio_viver".

No arquivo .env 
edite as seguintes linhas de código para conectar com o banco de dados


    DB_DATABASE=desafio_viver

    /* Suas credenciais de conexão com o banco de dados */

    DB_USERNAME=root

    DB_PASSWORD=root



Prosiga com o comando para gerar a autenticação do Laravel


     $ php artisan key:generate





Para iniciar o projeto no server do PHP rode o comando

    $ php artisan serve



Acesse o projeto na rota 

    localhost:8000




## License Laravel 5.7

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

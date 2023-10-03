## INTRODUÇÃO
Este é um projeto full stack simples que faz a integração com uma API de usuários (https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0) para coletar dados de usuários e armazená-los no banco de dados da aplicação. A aplicação oferece uma interface que exibe os registros de usuários em uma tabela com suporte à paginação, exibindo 10 registros por página. Os usuários têm a opção de editar ou excluir esses registros de acordo com suas preferências.

## DESENVOLVIMENTO
Este projeto foi desenvolvido com a utilização do framework Laravel no lado do servidor, enquanto para a interface do usuário, utilizou-se o Blade e o Bootstrap. Quanto à persistência de dados, optou-se por empregar o banco de dados MySQL, através do ambiente de desenvolvimento Xampp.

## PASSO À PASSO PARA RODAR O PROJETO

Ligue o serviço do MySQL no xampp: <br/><br/>
![image](https://github.com/tadeubdossantos/controle-medicos/assets/86169857/fc752c74-ae72-473c-acca-852f8df5e53d)

Clone o repositório:
```
git clone https://github.com/tadeubdossantos/projeto-simples-laravel.git
```
Acesse o diretório do projeto:
```
cd projeto-simples-laravel
```
Crie o arquivo .env:
```
cp .env.example .env
```
Atualize essas variáveis de ambiente no arquivo .env:
```
APP_NAME="Projeto Simples Laravel"

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projeto-simples-laravel
DB_USERNAME=root
DB_PASSWORD=
```
Instale as dependências do projeto:
```
composer install
```
Gere a key do projeto Laravel:
```
php artisan key:generate
```
Para o projeto estar apto a ser executado:
```
php artisan serve
```
Em uma nova instância do terminal dê os comandos:
```
# para baixar as depêndencias do projeto
npm install 

# para a compilação do assets
npm run build
```
Em um nova instância do terminal dê o comando abaixo para criar o banco de dados:
```
php artisan migrate
```
<br/>
Para acessar o projeto: http://localhost:8000/
<br/>
<br/>
Para consumir a API de usuários, acesse: http://localhost:8000/users_api, pois assim todos os registros de usuários que se encontra nessa API será armazenada no banco de dados.
<br/>

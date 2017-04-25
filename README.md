# Melhor Envio

* Teste para vaga de front-end: Calculadora de fretes.

Execute os comandos abaixo para que a aplicação base funcione adequadamente:

Para instalar as dependências do PHP, executar o comando abaixo:

```bash
$ composer install
```

Para gerar seu arquivo com as variáveis de configuração, executar o comando abaixo:

```bash
$ cp .env.example .env && php artisan key:generate
```

Para criar o arquivo de banco sqlite, executar o comando abaixo:

```bash
$ touch database/database.sqlite
```

Para criar o schema do banco de dados e cadastrar os dados de teste, executar o comando abaixo:

```bash
$ php artisan migrate --seed
```

Para configurar a autenticação OAuth2 para a api local, executar o comando abaixo:

```bash
$ php artisan passport:install
```

Para executar a aplicação laravel localmente, executar o comando abaixo:

```bash
$ php artisan serve
```

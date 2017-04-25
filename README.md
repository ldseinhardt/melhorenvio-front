# Melhor Envio

* Teste para vaga de front-end: Calculadora de fretes.

Descrição:




Execute os procedimentos abaixo para que a aplicação base funcione adequadamente:

Para instalar as dependências do PHP, executar o comando abaixo:

> Caso não possua o PHP instalado, realize a instalação do mesmo e das dependências do [Laravel 5.4](https://laravel.com/docs/5.4), bem como do módulo de sqlite para PHP exemplo: `$ sudo apt-get install php php-sqlite3` .

```bash
$ composer install
```

Para gerar o seu arquivo com as variáveis de configuração, executar o comando abaixo:

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

Para executar a aplicação Laravel localmente, executar o comando abaixo:

```bash
$ php artisan serve
```

Conta de testes da aplicação:
```
Email: test@melhorenvio.com.br
Senha: 123456
```

Contato: dev@melhorenvio.com.br

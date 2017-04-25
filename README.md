# Melhor Envio

* Teste para vaga de front-end: Calculadora de fretes.

---

Descrição:

 - Desenvolver uma calculadora de fretes na página inicial onde o usuário possa selecionar os estados de origem e destino, além das dimensões e peso. Demais valores, como valor declarado podem ser preencidos com um valor padrão qualquer.
 - Essa calculadora deve mapear cada estado para um cep qualquer da capital do respectivo estado para que a mesma possa utilizar a api do Melhor Envio.
 - Deve ser utilizado a api de geolocalização do navegador para obter as coordenadas do usuário e então pré-selecionar o estado de origem do usuário, se for necessário obter informações a respeito das coordenadas pode ser utilizado como, por exemplo, a api de geolocalização do Google.
 - No dashboard do usuário, o mesmo deve poder visualizar, criar, editar e remover (crud) os seus pacotes.
 - Caso o usuário esteja logado, o mesmo deve poder selecionar na calculadora algum pacote que possuí as dimensões com/sem peso.
 - Informações como, últimos dados selecionados e últimas 5 cotações de fretes devem ser armazenas com localStorage e mostradas ao usuário.
 - A interface deve ser responsiva e se adequar a resoluções padrões de desktops, tablets e smartphones.

 - Deve ser utilizado:
 
   - Laravel Mix
   - Vue.js ou React como framework JS
   - SASS
   - Gerenciador de pacotes NPM ou Yarn para instalação das dependências.
 
 - Pode ser utilizado o Bootstrap como framework.

---

A documentação da api do Melhor Envio pode ser obtida em https://api.melhorenvio.com.br/v1/docs, além disso há um exemplo de calculadora em http://www.melhorenvio.com.br/cotar

Informações a respeito de uma coordenada podem ser obtidsa como no exemplo abaixo:

https://maps.googleapis.com/maps/api/geocode/json?latlng=35.689487,139.691706


| Método | Endpoint           | Descrição |
|--------|--------------------|-----------|
| GET    | /api/packages      | Retorna todos os pacotes dos usuário logado |
| GET    | /api/packages/{id} | Retorna os dados do pacote com o id informado |
| POST   | /api/packages      | Cria um pacote novo, passar no corpo: label, width, height, length, weight |
| PUT    | /api/packages/{id} | Atualiza o pacote com o id informado, passar no corpo: label, width, height, length, weight |
| DELETE | /api/packages/{id} | Remove o pacote com o id informado |


---

Para realizar este teste, você deve fazer um `fork` deste projeto no github e ao término realizar um `pull request` com a sua solução.

---

Execute os procedimentos abaixo para que a aplicação base funcione adequadamente:

Para instalar as dependências do PHP, executar o comando abaixo:

> Caso não possua o PHP instalado, realize a instalação do mesmo e das dependências do [Laravel 5.4](https://laravel.com/docs/5.4), bem como do módulo de sqlite para PHP, exemplo: `$ sudo apt-get install php php-sqlite3` .

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

Para instalar as dependências de front e compilar os assets, executar o comando abaixo:

```bash
$ yarn && yarn run dev
```

Conta de testes da aplicação:
```
Email: test@melhorenvio.com.br
Senha: 123456
```

Contato: dev@melhorenvio.com.br

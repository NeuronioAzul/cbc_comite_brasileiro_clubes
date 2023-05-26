
<p><img src="/public/CBC_logo.jpg" width="100%" alt="CBC Logo"></p>

# Gerenciamento de Recursos Financeiros de Clubes - API

## Índice

- [Sobre](#about)
- [Tecnologias utilizadas](#tecnology)
- [Configuração do ambiente](#configuration)
  - [Clone o repositório:](#config01)
  - [Dependências](#config02)
  - [Altere o arquivo `.env`](#config03)
  - [Migrações](#config04)
  - [Servidor](#config05)
- [Uso da Api](#intructions)
  - [Documentação](#documentation)


## Sobre<a name="about"></a>
Esta é uma API REST desenvolvida como parte de um teste técnico para o Comitê Brasileiro de Clubes. 

A API permite o gerenciamento de recursos financeiros de clubes, incluindo:

- listagem de clubes; 
- cadastro de clubes;
- consumo de recursos.

Para mais informações sobre o teste acesse: <a href="/public/CBC.pdf" target="_blank"> 📕 Arquivo com o teste pdf</a>

## Tecnologias utilizadas<a name="tecnology"></a>

- PHP (8.2)
- Laravel Framework 10.12.0
- MySQL (5.7 ou superior)
- Composer (2.2 ou superior)

## Configuração do ambiente<a name="configuration"></a>

Certifique-se de ter o PHP e o MySQL instalados em seu ambiente de desenvolvimento.

Caso ainda não tenha, você pode baixar o WAMPP em : https://www.wampserver.com/en/

1. Clone o repositório:<a name="config01"></a>

```bash
git clone https://github.com/NeuronioAzul/cbc_comite_brasileiro_clubes.git
```

2. Dependências<a name="config02"></a>

Instale as dependências do projeto via Composer (2.2 ou superior)

Para download da versão mais nova do composer acesse: https://getcomposer.org/download/

```bash
composer install
```

3. Altere o arquivo `.env`<a name="config03"></a>

Na raiz do projeto e defina as configurações de banco de dados.

Configure as variáveis de ambiente relacionadas ao banco de dados, como no exemplo abaixo:

### `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cbc
DB_USERNAME=cbc
DB_PASSWORD=cbc
```

4. Migrações<a name="config04"></a> 

Execute as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

5. Servidor<a name="config05"></a>

Inicie o servidor de desenvolvimento:

Abra o terminal na pasta do projeto e execute o comando abaixo:

Mantenha o terminal aberto executando o servidor

```bash
php artisan serve
```

## Uso da API<a name="intructions"></a>

Acesse a API em http://localhost:8000/api.

A API possui as seguintes funcionalidades:

- Listar todos os clubes: `GET /api/clubes`
- Cadastrar um clube: `POST /api/clubes`
- Consumir recursos: `POST /api/consume`

Consulte a documentação da API para obter detalhes sobre a estrutura dos dados e os 
parâmetros esperados em cada requisição.

<a name="documentation"></a>
- 📚 Documentação da Api: [Acesse a Documentação](https://documenter.getpostman.com/view/5349883/2s93m7ULc7)

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).


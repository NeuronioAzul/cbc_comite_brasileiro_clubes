
<p><img src="/public/CBC_logo.jpg" width="100%" alt="CBC Logo"></p>

# Gerenciamento de Recursos Financeiros de Clubes - API

## Índice

- [Sobre](#about)
- [Tecnologias utilizadas](#tecnology)
- [Configuração do ambiente](#configuration)
  - [Clone o repositório:](#config01)

## Sobre<a name="about">
Esta é uma API REST desenvolvida como parte de um teste técnico para o Comitê Brasileiro de Clubes. 

A API permite o gerenciamento de recursos financeiros de clubes, incluindo:

- listagem de clubes; 
- cadastro de clubes;
- consumo de recursos.

Para mais informações sobre o teste acesse: <a href="/public/CBC.pdf" target="_blank"> 📕 Arquivo com o teste pdf</a>

## Tecnologias utilizadas

- PHP (8.2)
- Laravel Framework 10.12.0
- MySQL (5.7 ou superior)

## Configuração do ambiente

Certifique-se de ter o PHP e o MySQL instalados em seu ambiente de desenvolvimento.

Caso ainda não tenha, você pode baixar o WAMPP em : https://www.wampserver.com/en/

1. Clone o repositório:

```bash
git clone https://github.com/NeuronioAzul/cbc_comite_brasileiro_clubes.git
```

2. Instale as dependências do projeto via Composer:

```bash
composer install
```

3. Altere o arquivo `.env` na raiz do projeto e defina as configurações de banco de dados:

Configure as variáveis de ambiente relacionadas ao banco de dados, como 
`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD`.

4. Execute as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

5. Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

Acesse a API em http://localhost:8000/api.

## Uso da API<a name="intructions">

A API possui as seguintes funcionalidades:

- Listar todos os clubes: `GET /api/clubes`
- Cadastrar um clube: `POST /api/clubes`
- Consumir recursos: `POST /api/consume`

Consulte a documentação da API para obter detalhes sobre a estrutura dos dados e os 
parâmetros esperados em cada requisição.

📚 Documentação da Api: https://documenter.getpostman.com/view/5349883/2s93m7ULc7

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).


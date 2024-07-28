# Cadastro Pessoas Laravel Vue.js

Este projeto é uma aplicação web desenvolvida usando Laravel para o backend e Vue.js para o frontend. O sistema permite o cadastro e a busca de pessoas.

## Requisitos

- PHP 8.3
- MySQL 8
- Composer
- Node.js e npm

## Estrutura do Projeto

- `app/`: Contém o código backend do Laravel.
- `resources/js/`: Contém o código frontend do Vue.js.
- `database/seeders/`: Contém os seeders para popular o banco de dados.

## Funcionalidades

- Cadastro de pessoas
- Busca de pessoas

## Tecnologias Utilizadas

- Laravel 11.x
- Vue.js 3.x
- MySQL 8
- PHP 8.3

## Configuração do Projeto

### 1. Clone o Repositório

```bash
git clone https://github.com/seu-usuario/seu-projeto.git
cd seu-projeto
```

### 2. Instale as Dependências do PHP

```bash
composer install
```

### 3. Instale as Dependências do Nodejs

```bash
npm install
```

### 4. Configure o Banco de Dados

```makefile
DB_CONNECTION=mysql
DB_HOST=seu-host
DB_PORT=3306
DB_DATABASE=cadastro_pessoas
DB_USERNAME=seu-usuario
DB_PASSWORD=sua-senha
```

### 5. Gere o Seed do Banco de Dados

```bash
php artisan db:seed
```

### 6. Compile os arquivos do Frontend

```bash
npm run build
```

### 7. Execute o projeto

```bash
php artisan serve
```

O sistema estará disponível em http://localhost:8000.
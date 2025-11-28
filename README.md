# APS 3 – Laravel

Projeto de referência para a APS 3 com foco em rotas GET/POST, controllers, views Blade, models e migrations.

## Estrutura
- **Controllers**: `ProductController` e `CategoryController` com métodos `index` (GET) e `store` (POST).
- **Views**: formulários e listagens em `resources/views/products` e `resources/views/categories` usando o layout `layouts.app`.
- **Models e Migrations**: `Product` e `Category` com tabelas dedicadas.
- **Rotas**: definidas em `routes/web.php` conforme especificação do enunciado.

Para executar o projeto é necessário instalar as dependências via Composer e configurar o banco (por padrão, SQLite).

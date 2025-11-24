📘 Projeto Laravel – Instruções de Instalação e Execução

Este projeto foi desenvolvido utilizando o framework Laravel e requer alguns passos importantes para ser configurado corretamente na máquina do avaliador.
Abaixo estão todas as instruções necessárias para instalar, configurar e executar o sistema localmente.

✅ 1. Pré-requisitos

Antes de rodar o projeto, certifique-se que sua máquina possui:

PHP 8.1+

Composer (gerenciador de pacotes PHP)

Node.js 16+

NPM ou Yarn

SQLite (ou outro banco caso queira adaptar)

Extensões PHP obrigatórias do Laravel:

pdo_sqlite

mbstring

openssl

tokenizer

xml

📥 2. Clonar ou extrair o projeto

Se o projeto for baixado por ZIP:

Extraia o projeto em qualquer pasta da sua preferência.


Se for clonado via Git:

git clone <URL_DO_REPOSITORIO>
cd nome-do-projeto

🗂️ 3. Instalar dependências PHP

No terminal, dentro da pasta do projeto:

composer install


Isso irá recriar a pasta vendor/ que não está incluída no repositório.

📦 4. Instalar dependências JavaScript (frontend)
npm install

⚙️ 5. Criar o arquivo .env

O arquivo .env não está no repositório por segurança.
Crie uma cópia do arquivo de exemplo:

cp .env.example .env


Após isso, configure as credenciais.

Para usar banco SQLite:

Coloque no .env:

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite


Crie o arquivo do banco:

touch database/database.sqlite


(No Windows basta criar um arquivo vazio database.sqlite dentro da pasta /database)

🔐 6. Gerar a chave da aplicação
php artisan key:generate

🗃️ 7. Rodar as migrações

Isso cria todas as tabelas do banco:

php artisan migrate


Se quiser rodar também seeders (caso existam):

php artisan migrate --seed

👤 8. Criar um usuário para login

Este projeto usa autenticação do Laravel Breeze/Jetstream.
Para criar o usuário manualmente:

php artisan tinker


No Tinker:

$user = new App\Models\User();
$user->name = "Admin";
$user->email = "admin@email.com";
$user->password = bcrypt("senha123");
$user->save();


Saia com:

exit


Agora já pode logar.

▶️ 9. Iniciar o servidor
php artisan serve


O sistema ficará disponível em:

http://localhost:8000

🎨 10. Rodar o front-end (opcional)

Se o projeto usa Vite:

npm run dev


Isso habilita o hot reload.

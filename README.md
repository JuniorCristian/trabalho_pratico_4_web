Intale o php pelo menos na versão 7.3
instale o composer
na pasta do projeto rode o comando: composer install
Crie um banco de dados vazio e coloque o nome dele no arquivo .env da propriedade DB_NAME=
Caso o arquivo não exista, crie um cópia do arquivo .env.exemple e renomeie para .env
Após isso rode o comando: php artisan serve --host=0.0.0.0 --port=8002

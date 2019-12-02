# Callflex
## Sistema de teste


### Requisitos para executar projeto:
1. PHP 7
2. [Composer](https://getcomposer.org/)

### Instalação:
Clonar o projeto com `git clone https://github.com/danilosong/callflex.git` em uma pasta.
Então, deve-se incluir o arquivo * composer.phar * na pasta deste projeto e executar
o comando `composer install`. A pasta * Vendor * será incluída neste projeto.

É necessário que a base exista. Ao criar a base e configurá-lo no projeto
configurações padrão são:
'host'     => 'localhost',
'port'     => '3306',
'user'     => 'root',
'password' => 'root01',
'dbname'   => 'callflex',
mas pode ser mudada em config/autoload/doctrine_orm.local.php
Após ter a database criada em 'mysql' entre na pasta raiz exemplo. /var/www/callflex e
execute os comandos:
```
php vendor/bin/doctrine-module orm:validate-schema
php vendor/bin/doctrine-module orm:schema-tool:update  --force --dump-sql
```
ZendSkeletonApplication / callflex
=======================

Introduction
------------
Estrutura simples mvc ultilizando zendFramework 2 com doctrine 2

Installation
------------

Necessário Composer
----------------------------
Após a instalação do composer
    cd my/project/dir
    cd callflex
    composer install

Em seguida crie um db no nome de "callflex" ou altere o arquivo config/autoload/doctrine_orm.local.php
Os dados padrão estão configurado como:
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'root01',
                    'dbname'   => 'callflex',
 Após estiver tudo configurado e com database criado execute os seguintes comandos
    cd my/project/dir
    cd callflex
    php vendor/bin/doctrine-module orm:validate-schema
    php vendor/bin/doctrine-module orm:schema-tool:update  --force --dump-sql

Isso fará com que as tabelas do banco sejam atualizadas.

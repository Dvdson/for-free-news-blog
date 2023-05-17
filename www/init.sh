#!/bin/bash

# Baixando Pacotes composer
composer install

# atualizando banco
vendor/bin/migrate-doctrine migrate

# criando usuário administrador
php src/Helper/init.php
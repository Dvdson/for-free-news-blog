#!/bin/bash

# Baixando Pacotes composer
docker exec lamp-php8 composer install

# atualizando banco
docker exec lamp-php8 vendor/bin/migrate-doctrine migrate

# criando usuário administrador
docker exec lamp-php8 php src/Helper/init.php
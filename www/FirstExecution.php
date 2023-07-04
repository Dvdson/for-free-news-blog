<?php

require_once 'src/Helper/Database.php';

// Lê o conteúdo do arquivo SQL
$sql = file_get_contents("tables.sql");

// Executa as operações SQL
Database::getInstance()->getPdo()->exec($sql);

echo "Operações SQL executadas com sucesso!";

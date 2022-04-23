<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Exception\ORMException;
use Uniasselvi\FreeBlog\Helper\EntityManagerFactory;
use Doctrine\Migrations\Configuration\Migration\YamlFile;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;

$entityManagerFactory = new EntityManagerFactory();

$config = new YamlFile('migrations.yml');

try {
	$entityManager = $entityManagerFactory->getEntityManager();
	return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));
} catch (ORMException $e) {
	echo "Error to create EntityManager: " . $e->getMessage();
}





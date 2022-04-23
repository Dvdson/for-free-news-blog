<?php

namespace Uniasselvi\FreeBlog\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\ORMSetup;

class EntityManagerFactory {


	/**
	 * @throws ORMException
	 */
	public function getEntityManager(): EntityManagerInterface {
		$rootDir = __DIR__ . "/../..";

		$config = ORMSetup::createAnnotationMetadataConfiguration([$rootDir."/src/Models"], true);
		$connection = [
			'dbname' => $_ENV['MYSQL_DATABASE'],
			'user' => $_ENV['MYSQL_USER'],
			'password' => $_ENV['MYSQL_PASSWORD'],
			'host' => 'database',
			'driver' => 'pdo_mysql',
		];

		return EntityManager::create($connection, $config);
	}

}

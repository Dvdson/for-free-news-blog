<?php

use Doctrine\ORM\Exception\ORMException;
use Uniasselvi\FreeBlog\Models\User;

require_once $_SERVER['DOCUMENT_ROOT'].'/../vendor/autoload.php';

$entityManagerFactory = new \Uniasselvi\FreeBlog\Helper\EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$UsersRepository = $entityManager->getRepository(User::class);

if(!$UsersRepository->findOneBy(["username" => "admin"])){
	$UsersRepository->persist(User::create("admin", "", "admin"));
	$UsersRepository->flush();
}
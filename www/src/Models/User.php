<?php

namespace Uniasselvi\FreeBlog\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */
class User {

	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private int $id;
	/**
	 * @ORM\Column(type="string", unique=true, nullable=false)
	 * @Required
	 *
	 */
	private string $username;
	/**
	 * @ORM\Column(type="string")
	 */
	private string $email;
	/**
	 * @ORM\Column(type="string")
	 */
	private string $password;



}
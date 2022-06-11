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
	 */
	private string $username;
	/**
	 * @ORM\Column(type="string")
	 */
	private string $email;
	/**
	 * @ORM\Column(type="string", length=60)
	 */
	private string $password;

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}
	/**
	 * @param int $id
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getUsername(): string
	{
		return $this->username;
	}
	/**
	 * @param string $username
	 */
	public function setUsername(string $username): void
	{
		$this->username = $username;
	}

	/**
	 * @return string containing the email of this user
	 */
	public function getEmail(): string
	{
		return $this->email;
	}
	/**
	 * @param string $email
	 */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function checkPassword(string $password): bool {
		return $this->password == $password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword(string $password): void
	{
		$this->password = password_hash($password, PASSWORD_BCRYPT);
	}

	static public function create(string $username, string $email, string $password) : User {
		$new_user = new User();
		$new_user->setUsername($username);
		$new_user->setEmail($email);
		$new_user->setPassword($password);

		return $new_user;
	}


}
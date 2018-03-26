<?php

class Usuario 
{

	
	private $id;
	private $nome;
	private $email;
	private $login;
	private $senha;
	private $status;

	
	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of email
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of login
	 */
	public function getLogin()
	{
		return $this->login;
	}

	/**
	 * Set the value of login
	 *
	 * @return  self
	 */
	public function setLogin($login)
	{
		$this->login = $login;

		return $this;
	}

	/**
	 * Get the value of senha
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * Set the value of senha
	 *
	 * @return  self
	 */
	public function setSenha($senha)
	{
		$this->senha = $senha;

		return $this;
	}

	/**
	 * Get the value of status
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Set the value of status
	 *
	 * @return  self
	 */
	public function setStatus($status)
	{
		$this->status = $status;

		return $this;
	}

	/**
	 * Get the value of nome
	 */ 
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @return  self
	 */ 
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}
}
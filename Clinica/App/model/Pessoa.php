<?php

class Pessoa
{

	protected $nome;
	protected $endereco;
	protected $telefone;
	protected $idade;

	public function __construct($nome, $endereco, $telefone, $idade)
	{
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
		$this->idade = $idade;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($value)
	{
		$this->nome = $value;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setEndereco($value)
	{
		$this->endereco = $value;
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setTelefone($value)
	{
		$this->telefone = $value;
	}

	public function getIdade()
	{
		return $this->idade;
	}

	public function setIdade($value)
	{
		$this->idade = $value;
	}

	public function exibirInfo()
	{
		echo "Nome: " . $this->nome .
			"<br> Endereço: " . $this->endereco .
			"<br> Telefone: " . $this->telefone .
			"<br> Idade: " . $this->idade  . " anos! <br>";
	}
}

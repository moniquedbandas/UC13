<?php

class Pessoa
{
    private $nome;
    private $idade;


    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibirInfo()
    {
        echo "Informações da pessoa: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " .  $this->idade . "<br>";
    }
}

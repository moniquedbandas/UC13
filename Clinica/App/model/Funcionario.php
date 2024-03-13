<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{
  private $turno;

  public function __construct($nomeCompleto, $endereco, $telefone, $idade, $turno)
  {
    parent::__construct($nomeCompleto, $endereco, $telefone, $idade);
    $this->turno = $turno;
  }

  public function getTurno()
  {
    return $this->turno;
  }

  public function setTurno($value)
  {
    $this->turno = $value;
  }

  public function exibirInfoFunc()
  {
    parent::exibirInfo();
    echo "Turno: " . $this->turno;
  }
}

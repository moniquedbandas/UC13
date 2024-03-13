<?php
require_once 'Pessoa.php';

class Medico extends Pessoa
{
  private $crm;
  private $especialidade;
  private $plano;

  public function __construct($nomeCompleto, $endereco, $telefone, $idade, $crm, $especialidade, $plano)
  {
    parent::__construct($nomeCompleto, $endereco, $telefone, $idade);
    $this->crm = $crm;
    $this->especialidade = $especialidade;
    $this->plano = $plano;
  }

  public function getCrm()
  {
    return $this->crm;
  }

  public function setCrm($value)
  {
    $this->crm = $value;
  }

  public function getEspecialidade()
  {
    return $this->especialidade;
  }

  public function setEspecialidade($value)
  {
    $this->especialidade = $value;
  }

  public function getPlano()
  {
    return $this->plano;
  }

  public function setPlano($value)
  {
    $this->plano = $value;
  }

  public function exibirInfoMedico()
  {
    parent::exibirInfo();
    echo "CRM: " . $this->crm .
      "<br> Especialidade: " . $this->especialidade .
      "<br> Plano: " . $this->plano;
  }
}

<?php
require_once 'Pessoa.php';
class Paciente extends Pessoa
{

  protected $idPaciente;
  protected $sexo;

  public function __construct($idPaciente, $nome, $endereco, $telefone, $idade, $sexo)
  {
    parent::__construct($nome, $endereco, $telefone, $idade);
    $this->idPaciente = $idPaciente;
    $this->sexo = $sexo;
  }

  public function getIdPaciente()
  {
    return $this->idPaciente;
  }

  public function setIdPaciente($value)
  {
    $this->idPaciente = $value;
  }
  public function getSexo()
  {
    return $this->sexo;
  }
  public function setSexo($value)
  {
    $this->sexo = $value;
  }

  public function exibirInfoCliente()
  {
    parent::exibirInfo();
    echo "Sexo: " . $this->sexo . "<br>";
  }

  public function cadastrarPaciente(Paciente $paciente)
  {
    include_once '../DAO/PacienteDAO.php';
    $paciente = new PacienteDAO();
    $paciente->cadastrarPaciente($this);
  }
  public function listarPacientes()
  {
    include '../DAO/PacienteDAO.php';
    $dao = new PacienteDAO(null);
    return $dao->listarPacientes();
  }
  public function resgataPorID($idPaciente)
  {
    include '../DAO/PacienteDAO.php';
    $model = new PacienteDAO(null);
    return $model->resgataPorID($idPaciente);
  }
  public function alterarPaciente(Paciente $paciente)
  {
    include '../DAO/PacienteDAO.php';
    $paciente = new PacienteDAO();
    $paciente->alterarPaciente($this);
  }
  public function excluirPaciente($idPaciente)
  {
    include_once '../DAO/PacienteDAO.php';
    $paciente = new PacienteDAO();
    $paciente->excluirPaciente($idPaciente);
  }
}

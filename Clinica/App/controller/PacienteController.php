<?php

class PacienteController
{
    public static function cadastrarPaciente($nome, $endereco, $telefone, $idade, $sexo)
    {
        include '../model/Paciente.php';
        $paciente = new Paciente(null, $nome, $endereco, $telefone, $idade, $sexo);
        $paciente->cadastrarPaciente($paciente);
    }

    public static function listarPacientes()
    {
        include '../model/Paciente.php';
        $model = new Paciente(null, null, null, null, null, null, null);
        return $model->listarPacientes();
    }

    public static function resgataPorID($idPaciente)
    {
        include '../model/Paciente.php';
        $model = new Paciente(null, null, null, null, null, null, null);
        return $model->resgataPorID($idPaciente);
    }

    public static function alterarPaciente($idPaciente, $nome, $endereco, $telefone, $idade, $sexo)
    {
        include '../model/Paciente.php';
        $paciente = new Paciente($idPaciente, $nome, $endereco, $telefone, $idade, $sexo);
        $paciente->alterarPaciente($paciente);
    }

    public static function excluirPaciente($idPaciente)
    {
        include '../model/Paciente.php';
        $paciente = new Paciente(null, null, null, null, null, null, null);
        $paciente->excluirPaciente($idPaciente);
    }
}

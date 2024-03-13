<?php
include_once 'Conexao.php';
class PacienteDAO
{
    public function cadastrarPaciente(Paciente $paciente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO paciente (nomePaciente, endPaciente, telPaciente, idadePaciente, sexoPaciente) VALUES (:nome, :endereco, :telefone, :idade, :sexo)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nome', $paciente->getNome());
        $stmt->bindValue(':endereco', $paciente->getEndereco());
        $stmt->bindValue(':telefone', $paciente->getTelefone());
        $stmt->bindValue(':idade', $paciente->getIdade());
        $stmt->bindValue(':sexo', $paciente->getSexo());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro feito com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao cadastrar');</script>";
        }
        echo "<script>location.href='../controller/ProcessaPaciente.php?op=listar';</script>";
    }

    public function listarPacientes()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM paciente ORDER BY idPaciente";
        return $conex->conn->query($sql);
    }

    public function resgataPorID($idPaciente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM paciente WHERE idPaciente = '$idPaciente'";
        return $conex->conn->query($sql);
    }

    public function alterarPaciente(Paciente $paciente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE paciente SET nomePaciente = :nome, endPaciente = :endereco, telPaciente = :telefone, idadePaciente = :idade, sexoPaciente = :sexo WHERE idPaciente = :idPaciente";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idPaciente', $paciente->getIdPaciente());
        $stmt->bindValue(':nome', $paciente->getNome());
        $stmt->bindValue(':endereco', $paciente->getEndereco());
        $stmt->bindValue(':telefone', $paciente->getTelefone());
        $stmt->bindValue(':idade', $paciente->getIdade());
        $stmt->bindValue(':sexo', $paciente->getSexo());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Registrado alterado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao alterar');</script>";
        }
        echo "<script>location.href='../controller/ProcessaPaciente.php?op=listar';</script>";
    }

    public function excluirPaciente($idPaciente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM paciente WHERE idPaciente = '$idPaciente'";
        $res = $conex->conn->query($sql);
        if ($res) {
            echo "<script>alert('Registrado deletado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao deletar');</script>";
        }
        echo "<script>location.href='../controller/ProcessaPaciente.php?op=listar';</script>";
    }
}

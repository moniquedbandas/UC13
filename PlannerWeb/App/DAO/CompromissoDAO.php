<?php

include_once 'Conexao.php';

class CompromissoDAO
{

    public function cadastrarCompromisso(Compromisso $compromisso)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO compromisso (dataComp, hora, descricao) VALUES (:dataComp, :hora, :descricao)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':dataComp', $compromisso->getDataComp());
        $stmt->bindValue(':hora', $compromisso->getHora());
        $stmt->bindValue(':descricao', $compromisso->getDescricao());
        // $stmt->bindValue(':idUsuario', $compromisso->getIdUsuario());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro feito com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao cadastrar');</script>";
        }
    }

    public function listarCompromisso()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM compromisso ORDER BY idCompromisso";
        return $conex->conn->query($sql);
    }

    public function alterarCompromisso(Compromisso $compromisso)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE compromisso SET dataComp = :datacomp, hora = :hora, descricao = :descricao WHERE idCompromisso = :idCompromisso";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idCompromisso', $compromisso->getIdCompromisso());
        $stmt->bindValue(':dataComp', $compromisso->getDataComp());
        $stmt->bindValue(':hora', $compromisso->getHora());
        $stmt->bindValue(':descricao', $compromisso->getDescricao());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Compromisso alterado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao alterar');</script>";
        }
    }

    public function excluirCompromisso($idCompromisso)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM compromisso WHERE idCompromisso = '$idCompromisso'";
        $res = $conex->conn->query($sql);
        if ($res) {
            echo "<script>alert('Compromisso deletado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao deletar');</script>";
        }
    }
}

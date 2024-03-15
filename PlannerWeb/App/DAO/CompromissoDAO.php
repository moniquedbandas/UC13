<?php

include_once 'Conexao.php';

class CompromissoDAO
{

    public function cadastrarCompromisso(Compromisso $compromisso)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO compromisso (dataComp, hora, descricao, idUsuario) VALUES (:dataComp, :hora, :descricao, :idUsuario)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':dataComp', $compromisso->getDataComp());
        $stmt->bindValue(':hora', $compromisso->getHora());
        $stmt->bindValue(':descricao', $compromisso->getDescricao());
        $stmt->bindValue(':idUsuario', $compromisso->getIdUsuario());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro feito com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Sem sucesso ao cadastrar');</script>";
        }
    }
    public function listarCompromisso()
    {
    }
    public function alterarCompromisso(Compromisso $compromisso)
    {
    }
    public function excluirCompromisso($idCompromisso)
    {
    }
}

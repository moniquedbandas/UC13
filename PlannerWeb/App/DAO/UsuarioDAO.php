<?php
include_once 'Conexao.php';

class UsuarioDAO
{

    public function cadastrarUsuario(Usuario $usuario)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO usuario (nomeUsuario, senha) VALUES (:nomeUsuario, :senha)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomeUsuario', $usuario->getNomeUsuario());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro feito com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar usuário');</script>";
        }
    }

    public function autenticarUsuario($idUsuario)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idUsuario', $idUsuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //     public function autenticarUsuario($idUsuario)
    // {
    //     $conex = new Conexao();
    //     $conex->fazConexao();
    //     $sql = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
    //     $stmt = $conex->conn->prepare($sql);
    //     $stmt->bindValue(':idUsuario', $idUsuario);
    //     $stmt->execute();
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }
}

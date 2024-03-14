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

    public function autenticarUsuario($nomeUsuario, $senha)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM usuario WHERE nomeUsuario = :nomeUsuario";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomeUsuario', $nomeUsuario);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuario && $senha == $usuario['senha']) {
            return true;
        } else {
            return false;
        }
    }
}

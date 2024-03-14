<?php
include_once 'Conexao.php';

class UsuarioDAO
{

    public function cadastrarUsuario($nomeUsuario, $senha)
    {
        try {
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "INSERT INTO usuario (nomeUsuario, senha) VALUES (:nomeUsuario, :senha)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':nomeUsuario', $nomeUsuario);
            $stmt->bindValue(':senha', $senha);
            $res = $stmt->execute();
            if ($res) {
                echo "<script>alert('Cadastro feito com sucesso!');</script>";
                return true;
            } else {
                // echo "<script>alert('Erro ao cadastrar usuário');</script>";
                return false;
            }
        } catch (PDOException $e) {
            // echo "<script>alert('Erro ao cadastrar usuário');</script>";
            return false;
        }
    }

    public function autenticarUsuario($nomeUsuario, $senha)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM usuario WHERE nomeUsuario = :nomeUsuario AND senha = :senha";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomeUsuario', $nomeUsuario);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuario) {
            return $usuario;
        } else {
            return false;
        }
    }
}

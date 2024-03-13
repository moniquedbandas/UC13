<?php

class Usuario

{
    protected $idUsuario;
    protected $nomeUsuario;
    protected $senha;

    public function __construct($idUsuario, $nomeUsuario, $senha)
    {
        $this->idUsuario = $idUsuario;
        $this->nomeUsuario = $nomeUsuario;
        $this->senha = $senha;
    }
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($value)
    {
        $this->idUsuario = $value;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($value)
    {
        $this->nomeUsuario = $value;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($value)
    {
        $this->senha = $value;
    }

    public function cadastrarUsuario(Usuario $usuario)
    {
        include_once "../DAO/UsuarioDAO.php";
        $usuario = new UsuarioDAO();
        $usuario->cadastrarUsuario($this);
    }

    public function autenticarUsuario($idUsuario)
    {
        include_once "../DAO/UsuarioDAO.php";
        $model = new UsuarioDAO();
        return $model->autenticarUsuario($idUsuario);
    }
}

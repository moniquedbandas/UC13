<?php

class UsuarioController
{

    public static function cadastrarUsuario($nomeUsuario, $senha)
    {
        include_once '../model/Usuario.php';
        $usuario = new Usuario(null, $nomeUsuario, $senha);
        var_dump($usuario);
        $usuario->cadastrarUsuario($usuario);
    }

    public static function autenticarUsuario($nomeUsuario, $senha)
    {
        include_once '../model/Usuario.php';
        $model = new Usuario(null, null, null);
        return $model->autenticarUsuario($nomeUsuario, $senha);
    }
}

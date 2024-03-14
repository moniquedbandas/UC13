<?php

class UsuarioController
{

    public static function cadastrarUsuario($nomeUsuario, $senha)
    {
        include_once '../model/Usuario.php';
        include_once '../DAO/UsuarioDAO.php';

        // Verifica se os campos obrigatórios foram preenchidos
        if (!empty($nomeUsuario) && !empty($senha)) {
            $usuarioDAO = new UsuarioDAO();
            $cadastrado = $usuarioDAO->cadastrarUsuario($nomeUsuario, $senha);
            if ($cadastrado) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public static function autenticarUsuario($nomeUsuario, $senha)
    {
        include_once '../model/Usuario.php';
        $model = new Usuario(null, null, null);
        echo "Chamando autenticarUsuario no controlador<br>";
        $resultado = $model->autenticarUsuario($nomeUsuario, $senha);
        var_dump($resultado);
        return $resultado;
    }
}

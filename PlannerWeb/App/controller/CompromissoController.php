<?php
class CompromissoController
{

    public static function cadastrarCompromisso($dataComp, $hora, $descricao, $idUsuario)
    {
        include_once '../model/Compromisso.php';
        $compromisso = new Compromisso(null, $dataComp, $hora, $descricao, $idUsuario);
        $compromisso->cadastrarCompromisso($compromisso);
    }

    public static function listarCompromisso()
    {
        include_once '../model/Compromisso.php';
        $compromissoDAO = new Compromisso(null, null, null, null, null);
        return $compromissoDAO->listarCompromisso();
    }

    public static function alterarCompromisso($idCompromisso, $dataComp, $hora, $descricao)
    {
        include_once '../model/Compromisso.php';
        $compromisso = new Compromisso($idCompromisso, $dataComp, $hora, $descricao, $idUsuario);
        $compromisso->alterarCompromisso($compromisso);
    }

    public static function excluirCompromisso($idCompromisso)
    {
        include_once '../model/Compromisso.php';
        $compromisso = new Compromisso(null, null, null, null, null);
        $compromisso->excluirCompromisso($idCompromisso);
    }
}

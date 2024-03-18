<?
class CompromissoController
{

    public static function cadastrarCompromisso($dataComp, $hora, $descricao)
    {
        include_once '../model/Compromisso.php';
        $compromisso = new Compromisso(null, $dataComp, $hora, $descricao);
        $compromisso->cadastrarCompromisso($compromisso);
    }

    public static function listarCompromisso()
    {
        include_once '../model/Compromisso.php';
        $compromissoDAO = new Compromisso(null, null, null);
        return $compromissoDAO->listarCompromisso();
    }
    /*
    |criar uma função aqui para pegar o ID do usuario?
    |EXEMPLO:
    |public static function resgataPorID($idPaciente)
    |{
    |   include '../model/Paciente.php';
    |   $model = new Paciente(null, null, null, null, null, null, null);
    |   return $model->resgataPorID($idPaciente);
    |}
    */

    public static function alterarCompromisso($idCompromisso, $dataComp, $hora, $descricao)
    {
        include_once '../model/Compromisso.php';
        $compromisso = new Compromisso($idCompromisso, $dataComp, $hora, $descricao);
        $compromisso->alterarCompromisso($compromisso);
    }

    public static function excluirCompromisso($idCompromisso)
    {
        include_once '../model/Compromisso.php';
        $compromisso = new Compromisso(null, null, null);
        $compromisso->excluirCompromisso($idCompromisso);
    }
}

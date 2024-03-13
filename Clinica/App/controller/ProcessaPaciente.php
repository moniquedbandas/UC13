<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de pacientes</title>
    <link rel="stylesheet" href="../view/estilos.css">
</head>

<body>
    <?php
    switch ($_REQUEST['op']) {
        case "incluir";
            incluir();
            break;
        case "formAlterar";
            formAlterar();
            break;
        case "alterar";
            alterar();
            break;
        case "excluir";
            excluir();
            break;
        case "listar";
            listar();
            break;
        default:
            echo "Não achouu";
    }

    function incluir()
    {
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["tel"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        include 'PacienteController.php';
        $contr = new PacienteController();
        $contr->cadastrarPaciente($nome, $endereco, $telefone, $idade, $sexo);
    }

    function formAlterar()
    {
        include '../view/formAlterarPaciente.php';
    }

    function alterar()
    {
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["tel"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        $idPaciente = $_POST["idPaciente"];
        include 'PacienteController.php';
        $contr = new PacienteController();
        $contr->alterarPaciente($idPaciente, $nome, $endereco, $telefone, $idade,  $sexo);
    }

    function excluir()
    {
        $idPaciente = $_REQUEST["idPaciente"];
        include 'PacienteController.php';
        $contr = new PacienteController();
        $contr->excluirPaciente($idPaciente);
    }

    function listar()
    {
        include '../view/formListarPaciente.php';
    }
    ?>
</body>

</html>
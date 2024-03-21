<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krugy's Planner</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link rel="icon" href="../../Public/images/planner.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../Public/images/planner.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="../../Public/estilos.css">
</head>

<body>
    <?php
    switch ($_REQUEST['oc']) {
        case "cadastrarCompromisso": //feito
            cadastrar();
            break;
        case "alterarCompromisso":
            alterar();
            break;
        case "listarTela": //feito        
            listarTela();
            break;
        case "telaAlterarCompromisso": //feito
            telaAlterar();
            break;
        case "deletarCompromisso":
            deletar();
            break;
        default:
            echo "Erro no processamento das requisições de compromisso..";
    }

    function cadastrar()
    {
        session_start(); //starta a sessao para conseguir pegar o id do usuario que esta logado.
        $compromissos = json_decode($_POST['compromissos'], true);
        foreach ($compromissos as $compromisso) {
            $dataComp = $compromisso['dataComp'];
            $hora = $compromisso['hora'];
            $descricao = $compromisso['descricao'];
            include_once 'CompromissoController.php';
            $contr = new CompromissoController();
            $contr->cadastrarCompromisso($dataComp, $hora, $descricao, $_SESSION['usuario_id']);
            echo "<script>location.href='../view/PaginaAtividades.php';</script>";
        }
    }
    function listarTela()
    {
        echo "<script>location.href='../view/PaginaListarCompromisso.php';</script>";
    }
    function telaAlterar()
    {
        // echo "<script>location.href='../view/PaginaListarCompromisso.php';</script>";
        echo "<script>location.href='../view/PaginaAlterarCompromisso.php';</script>";
    }
    function alterar()
    {
        session_start();
        if (isset($_GET['idCompromisso'])) {
            $idCompromisso = $_GET['idCompromisso'];
            $dataComp = $_POST['dataComp'];
            $hora = $_POST['hora'];
            $descricao = $_POST['descricao'];
            $idUsuario = $_SESSION['usuario_id'];
            include_once 'CompromissoController.php';
            $contr = new CompromissoController();
            $contr->alterarCompromisso($idCompromisso, $dataComp, $hora, $descricao, $idUsuario);
            echo 'Compromisso alterado com sucesso.';
        } else {
            echo 'Erro: ID do compromisso não fornecido.';
        }
    }



    function deletar()
    {
        if (isset($_GET['idCompromisso'])) {
            $idCompromisso = $_GET['idCompromisso'];
            include_once 'CompromissoController.php';
            $controller = new CompromissoController();
            $controller->excluirCompromisso($idCompromisso);
            echo "<script>location.href='../view/PaginaListarCompromisso.php';</script>";
        } else {
            echo 'Erro: ID do compromisso não fornecido.';
        }
    }
    ?>

</body>

</html>
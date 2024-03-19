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
    echo "OPCAO: " . $_REQUEST['oc'];
    echo "<br>";
    switch ($_REQUEST['oc']) {
        case "cadastrarCompromisso": //feito
            cadastrar();
            break;
        case "alterarCompromisso":
            alterar();
            break;
        case "listarTela"; //feito        
            listarTela();
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
    function alterar()
    {
    }
    function listarTela()
    {
        echo "<script>location.href='../view/PaginaListarCompromisso.php';</script>";
    }

    function deletar()
    {
    }
    ?>

</body>

</html>
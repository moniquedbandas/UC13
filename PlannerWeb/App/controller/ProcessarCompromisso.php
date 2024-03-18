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
        case "cadastrarCompromisso":
            cadastrar();
            break;
        case "alterarCompromisso":
            alterar();
            break;
        case "listarTela"; //feito        
            listarTela();
            break;
        case "listarCompromisso":
            listar();
            break;
        case "deletarCompromisso":
            deletar();
            break;
        default:
            echo "Erro no processamento das requisições de compromisso..";
    }

    function cadastrar()
    {
        $dataComp = $_POST["data"];
        $hora = $_POST["hora"];
        $descricao = $_POST["descricao"];
        include 'CompromissoController.php';
        $contr = new CompromissoController();
        $contr->cadastrarCompromisso($dataComp, $hora, $descricao);
    }
    function adicionar()
    {
    }
    function alterar()
    {
    }
    function listarTela()
    {
        echo "<script>location.href='../view/PaginaListarCompromisso.php';</script>";
    }
    function listar()
    {
    }
    function deletar()
    {
    }
    ?>

</body>

</html>
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
    switch ($_REQUEST['op']) {
        case "adicionarCompromisso":
            adicionar();
            break;
        case "alterarCompromisso":
            alterar();
            break;
        case "listarCompromisso":
            listar();
            break;
        case "deletarCompromisso":
            deletar();
            break;
        default:
            echo "Erro no processamento das requisições.";
    }

    function adicionar()
    {
    }
    function alterar()
    {
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
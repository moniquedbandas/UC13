<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do funcionario</title>
    <link rel="stylesheet" href="../view/estilos.css">
</head>

<body>
    <div class="info">
        <?php

        require_once '../model/Funcionario.php';

        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["tel"];
        $idade = $_POST["idade"];
        $turno = $_POST["turno"];

        $funcionario = new Funcionario($nome, $endereco, $telefone, $idade, $turno);
        $funcionario->exibirInfoFunc();

        ?>
    </div>
</body>

</html>
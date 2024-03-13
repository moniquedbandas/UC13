<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do médico</title>
    <link rel="stylesheet" href="../view/estilos.css">
</head>

<body>
    <div class="info">
        <?php

        require_once '../model/Medico.php';

        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["tel"];
        $idade = $_POST["idade"];
        $crm = $_POST["crm"];
        $especialidade = $_POST["espec"];
        $plano = $_POST["plano"];

        $medico = new Medico($nome, $endereco, $telefone, $idade, $crm, $especialidade, $plano);
        $medico->exibirInfoMedico();

        ?>
    </div>
</body>

</html>
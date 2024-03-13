<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do paciente</title>
    <link rel="stylesheet" href="../view/estilos.css">
</head>

<body>
    <div class="info">
        <?php

        require_once '../model/Paciente.php';

        $nomeCompleto = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["tel"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];

        $paciente = new Paciente($nomeCompleto, $endereco, $telefone, $idade, $idPaciente, $sexo);

        $paciente->exibirInfoCliente();

        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para alteração de pacientes </title>
</head>

<body>
    <?php
    include("../controller/PacienteController.php");
    $res = PacienteController::resgataPorID($_REQUEST["idPaciente"]);
    $qtd = $res->rowCount();
    $row = $res->fetch(PDO::FETCH_OBJ);
    print "<div class='form2'>";
    print "<form method='post' action='../controller/ProcessaPaciente.php'>";
    print "<label for='nome'>Nome: </label><br>";
    print "<input type='text' name='nome' value=" . $row->nomePaciente . "><br>";
    print "<label for='endereco'>Endereço: </label><br>";
    print "<input type='text' name='endereco' value=" . $row->endPaciente . "><br>";
    print "<label for='tel'>Telefone: </label><br>";
    print "<input type='text' name='tel' value=" . $row->telPaciente . "><br>";
    print "<label for='idade'>Idade: </label><br>";
    print "<input type='number' name='idade' value=" . $row->idadePaciente . "><br>";
    print "<label for='sexo'>Sexo: </label><br>";
    print "<input type='text' name='sexo' value=" . $row->sexoPaciente . "><br>";
    print "<input type='hidden' name='idPaciente' value=" . $row->idPaciente . "><br>";
    print "<input type='hidden' name='op' value='alterar'><br>";
    print "<input type='submit' id='btnEnviar' value='Alterar'>";
    print "</form>";
    print "</div>";
    ?>
</body>

</html>
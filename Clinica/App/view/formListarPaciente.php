<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para alterar paciente</title>
</head>

<body>
    <?php
    include("../controller/PacienteController.php");
    $res = PacienteController::listarPacientes();
    $qtd = $res->rowCount();
    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Endereco</th>";
        print "<th>Telefone</th>";
        print "<th>Idade</th>";
        print "<th>Sexo</th>";
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>" . $row->idPaciente . "</td>";
            print "<td>" . $row->nomePaciente . "</td>";
            print "<td>" . $row->endPaciente . "</td>";
            print "<td>" . $row->telPaciente . "</td>";
            print "<td>" . $row->idadePaciente . "</td>";
            print "<td>" . $row->sexoPaciente . "</td>";
            print "<td>
            <button onclick=\"location.href= '../controller/ProcessaPaciente.php?op=formAlterar&idPaciente=" . $row->idPaciente . "';\">Alterar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                location.href= '../controller/ProcessaPaciente.php?op=excluir&idPaciente=" . $row->idPaciente . "'; } else {false;}\">Excluir</button>
            </td>";
            echo "</form>";
            print "</tr>";
        }
        print "</table>";
    } else {
        echo "<p>Nenhum registro encontrado!</p>";
    }

    ?>
</body>

</html>
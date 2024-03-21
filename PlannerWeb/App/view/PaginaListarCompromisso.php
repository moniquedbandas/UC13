<!-- paginaAtividades direciona para cá quando clicar no botão LISTAR! -->
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
    <div class="container">
        <h3 class="tituloContainer">Área de Listagem</h3>
        <form id="formComp" action="../../App/controller/ProcessarCompromisso.php" method="post">
            <div class="areaTabela">
                <?php
                session_start();
                include("../controller/CompromissoController.php");
                $res = CompromissoController::listarCompromisso();
                if ($res !== true) {
                ?>
                    <table class='table table-hover table-striped table-bordered'>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Descrição</th>
                            <th>Usuario</th>
                        </tr>
                        <?php while ($row = $res->fetch(PDO::FETCH_OBJ)) : ?>
                            <tr>
                                <td> <?= $row->idCompromisso ?> </td>
                                <td> <?= $row->dataComp ?> </td>
                                <td> <?= $row->hora ?> </td>
                                <td> <?= $row->descricao ?> </td>
                                <td> <?= $_SESSION['usuario_id'] ?> </td>
                                <td>
                                    <!-- <a href="../view/PaginaAlterarCompromisso.php">Editar</a> -->
                                    <a href="../view/PaginaAlterarCompromisso.php?idCompromisso=<?= $row->idCompromisso ?>">Editar</a>
                                    <a href="../controller/ProcessarCompromisso.php?oc=deletarCompromisso&idCompromisso=<?= $row->idCompromisso ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                <?php
                } else {
                    echo "<p>Nenhum compromisso encontrado!</p>";
                }
                ?>
            </div>
        </form>
    </div>

    <script src="../../Public/js/scripts.js"></script>

</body>

</html>
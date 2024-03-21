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
        <h3 class="tituloContainer">Área de edição.</h3>
        <form id="formComp" action="../../App/controller/ProcessarCompromisso.php" method="post">
            <div class="areaTabela">
                <?php
                session_start(); // Inicia a sessão para capturar o código do usuário
                include("../controller/CompromissoController.php");
                $res = CompromissoController::listarCompromisso();
                $qtd = $res->rowCount();
                ?>
                <table class='table table-hover table-striped table-bordered'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Descrição</th>
                            <th>Usuário</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $res->fetch(PDO::FETCH_OBJ)) : ?>
                            <tr>
                                <td><input type="text" name="idCompromisso" value="<?= $row->idCompromisso ?>"></td>
                                <td><input type="text" name="dataComp" value="<?= $row->dataComp ?>"></td>
                                <td><input type="text" name="hora" value="<?= $row->hora ?>"></td>
                                <td><input type="text" name="descricao" value="<?= $row->descricao ?>"></td>
                                <td><?= $_SESSION['usuario_id'] ?></td>
                                <td>
                                    <input type="hidden" id="oc" name="oc">
                                    <a href="../controller/ProcessarCompromisso.php?oc=alterarCompromisso&idCompromisso=<?= $row->idCompromisso ?>">Editar</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <script src="../../Public/js/scripts.js"></script>
</body>

</html>
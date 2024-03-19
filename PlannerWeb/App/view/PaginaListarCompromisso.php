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
        <h3 class="tituloContainer">Área de compromissos</h3>
        <div class="areaTabela">
            <?php
            session_start(); //starta a sessao para capturar o codigo
            include("../controller/CompromissoController.php");
            $res = CompromissoController::listarCompromisso();
            $qtd = $res->rowCount();
            ?>
            <?php if ($qtd > 0) : ?>
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
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else : ?>
                <p>Nenhum compromisso encontrado!</p>
            <?php endif; ?>
        </div>
        <div class="areaBotoes">
            <!-- <input type="submit" name="listagem" value="LISTAGEM" id="listagem"> acho que nao precisa disso, pq quando sai da pagina atividades, ele ja lista tudo -->
            <input type="submit" name="editar" value="EDITAR" id="editar">
            <input type="submit" name="deletar" value="DELETAR" id="deletar">
        </div>
    </div>

    <script src="../../Public/js/scripts.js"></script>
</body>

</html>
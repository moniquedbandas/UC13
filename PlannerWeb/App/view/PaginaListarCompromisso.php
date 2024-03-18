<!-- pagina de login sera direcionada para ca se o usuario ja tiver cadastro! -->
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
        <div class="areaCadastro">
            <div class="areaTabela">
                <table id="tabelaCompromissos">
                    <tr>
                        <!-- <th>Código</th> -->
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Descrição</th>
                    </tr><br>
                </table>
            </div>
            <div class="areaBotoes">
                <input type="submit" name="listagem" value="LISTAGEM" id="listagem">
                <input type="submit" name="editar" value="EDITAR" id="editar">
                <input type="submit" name="deletar" value="DELETAR" id="deletar">
            </div>
        </div>
    </div>

    <script src="../../Public/js/scripts.js"></script>
</body>

</html>
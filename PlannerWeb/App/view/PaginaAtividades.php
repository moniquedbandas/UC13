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
        <h3 class="tituloContainer">Cadastro de compromissos</h3>
        <div class="areaCadastro">
            <div class="labels">
                <label for="data">Data: </label>
                <input type="date" name="data" id="data"><br><br>
                <label for="hora">Hora: </label>
                <input type="time" name="hora" id="hora"><br><br>
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao"><br>
            </div>
            <div class="areaBotoes">
                <input type="submit" name="limpar" value="LIMPAR" id="limparTabela">
                <input type="submit" name="add" value="ADICIONAR" id="adicionarCompromisso">
            </div>
            <div class="areaTabela">
                <table id="tabelaCompromissos">
                    <tr>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Descrição</th>
                    </tr>
                </table>
            </div>
            <div class="areaBotoes">
                <input type="submit" name="salvar" value="SALVAR" id="salvarCompromisso">
                <input type="submit" name="listar" value="LISTAR" id="listarCompromisso">
            </div>
        </div>
    </div>

    <script src="../../Public/js/scripts.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabela gerada com php</h1>
    <table border="10">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
    $pessoas = array(
        array("João", 30),
        array("Maria", 25),
        array("Carlos", 40)
    );
    foreach($pessoas as $pessoa){
        echo "<tr>";
        echo "<td>" . $pessoa[0] . "</td>";
        echo "<td>" . $pessoa[1] . "</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
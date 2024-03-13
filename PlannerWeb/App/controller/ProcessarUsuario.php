<!-- se usuario nao tiver cadastro, sera direcionado para cá -->
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
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     criar();
    // } else {
    //     echo "Não achou";
    // }
    echo "OPCAO: " . $_REQUEST['op'];
    switch ($_REQUEST['op']) {
        case "criar":
            criar();
            break;
        case "autenticar":
            autenticar();
            break;
        default:
            echo "Erro OI OI OI.";
    }


    function criar()
    {
        $nomeUsuario = $_POST["username"];
        $senha = $_POST["password"];
        include './UsuarioController.php';
        $contr = new UsuarioController();
        $contr->cadastrarUsuario($nomeUsuario, $senha);
    }

    function autenticar()
    {
        $nomeUsuario = $_POST["username"];
        $senha = $_POST["password"];
        include './UsuarioController.php';
        $contr = new UsuarioController();
        $contr->autenticarUsuario($nomeUsuario, $senha);
    }
    ?>
</body>

</html>
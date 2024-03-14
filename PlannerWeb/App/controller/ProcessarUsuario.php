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
    echo "OPCAO: " . $_REQUEST['op'];
    switch ($_REQUEST['op']) {
        case "criar":
            criar();
            break;
        case "autenticar":
            autenticar();
            break;
        default:
            echo "Opção inválida.";
    }

    function criar()
    {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $nomeUsuario = $_POST["username"];
            $senha = $_POST["password"];
            include './UsuarioController.php';
            $contr = new UsuarioController();
            $contr->cadastrarUsuario($nomeUsuario, $senha);
            header("Location: ../view/PaginaAtividades.php");
            exit;
        } else {
            header("Location: ../view/PaginaCadUsuario.php");
            exit;
        }
    }

    function autenticar()
    {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $nomeUsuario = $_POST["username"];
            $senha = $_POST["password"];
            include './UsuarioController.php';
            $contr = new UsuarioController();
            $contr->autenticarUsuario($nomeUsuario, $senha);
            header("Location: ../view/PaginaAtividades.php");
            exit;
        } else {
            // Se os campos username e password não foram enviados, redirecione de volta para o formulário de login
            header("Location: ../../index.html");
            exit;
        }
    }


    ?>
</body>

</html>
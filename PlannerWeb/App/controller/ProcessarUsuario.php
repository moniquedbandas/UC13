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
    switch ($_REQUEST['op']) {
        case "criarTela":
            criarTela();
            break;
        case "criarUsuario":
            criarUsuario();
            break;
        case "autenticar":
            autenticar();
            break;
        default:
            echo "Erro no processamento das requisições.";
    }
    function criarTela()
    {
        echo "<script>location.href='../view/PaginaCadUsuario.php';</script>";
    }

    function criarUsuario()
    {
        if (!empty($_POST["cadUsername"]) && !empty($_POST["cadPassword"])) {
            $nomeUsuario = $_POST["cadUsername"];
            $senha = $_POST["cadPassword"];
            include './UsuarioController.php';
            $contr = new UsuarioController();
            $contr->cadastrarUsuario($nomeUsuario, $senha);
            echo "<script>location.href='../view/PaginaAtividades.php';</script>";
        } else {
            echo "<script>alert('Preencha todos os campos');</script>";
            echo "<script>location.href='../view/PaginaCadUsuario.php';</script>";
        }
    }

    function autenticar()
    {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $nomeUsuario = $_POST["username"];
            $senha = $_POST["password"];
            var_dump($nomeUsuario);
            var_dump($senha);
            include './UsuarioController.php';
            $contr = new UsuarioController();
            if ($contr->autenticarUsuario($nomeUsuario, $senha)) {
                echo "<script>location.href='../view/PaginaAtividades.php';</script>";
            } else {
                echo "<script>alert('Usuario ou senha incorretos');</script>";
                echo "<script>location.href='/index.html';</script>";
            }
        }
    }
    ?>

</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "metodo chamado: " . $_POST['op'];
    if (isset($_POST['signin'])) {
        echo "<script>location.href='../controller/ProcessarUsuario.php?op=autenticar';</script>";
        exit;
    } elseif (isset($_POST['signup'])) {
        echo "<script>location.href='../controller/ProcessarUsuario.php?op=criarTela';</script>";
        exit;
    }
}

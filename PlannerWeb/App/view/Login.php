<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "AAAA: " . $_POST['op'];
    if (isset($_POST['signin'])) {
        echo "<script>location.href='../controller/ProcessarUsuario.php?op=autenticar';</script>";
        // header("ocation ../controller/ProcessarUsuario.php&op=autenticar");
        exit;
    } elseif (isset($_POST['signup'])) {
        header("Location: ./PaginaCadUsuario.php");
        exit;
    }
}

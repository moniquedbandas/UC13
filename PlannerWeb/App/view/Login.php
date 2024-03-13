<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signin'])) {
        header("Location: ./PaginaAtividades.php");
        exit;
    } elseif (isset($_POST['signup'])) {
        header("Location: ./PaginaCadUsuario.php");
        exit;
    }
}

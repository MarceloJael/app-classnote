<?php
session_start();

if (!isset($_SESSION['id_usuario']) && basename($_SERVER['PHP_SELF']) != 'index.php') {
    header("Location: index.php");
    exit();
}

if (isset($_SESSION['id_usuario']) && basename($_SERVER['PHP_SELF']) == 'index.php') {
    header("Location: home.php");
    exit();
}
?>

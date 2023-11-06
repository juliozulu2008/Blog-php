<?php
include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>/css/style.css">
    <!-- Fontes -->

    <title>Blog Julio</title>
</head>

<body>
    <header>
        <a href="<?php $BASE_URL ?>" class="logo">
            <img src="<?php $BASE_URL ?>/img/logo.svg" alt="Blog Julio">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="<?php $BASE_URL ?>/index.php" class="nav-link">Home</a></li>
                <li><a href="<?php $BASE_URL ?>" class="nav-link">Categorias</a></li>
                <li><a href="<?php $BASE_URL ?>" class="nav-link">Sobre</a></li>
                <li><a href="<?php $BASE_URL ?>/contato.php" class="nav-link">Contato</a></li>

            </ul>
        </nav>
    </header>
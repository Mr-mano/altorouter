<?php
$pageTitle = "Blog";
$pageDescription = "Blog";
?>

<h1>Article <?= $params['slug']?></h1>

<a href="<?= $router->generate('home')?>">Page d'accueil</a>
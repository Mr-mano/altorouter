<?php
$pageTitle = "Accueil";
$pageDescription = "Accueil";
?>

<h2>Home</h2>

<a href="<?= $router->generate('contact')?>">Nous contacter</a><br>
<a href="<?= $router->generate('page')?>">test page</a><br>
<a href="<?= $router->generate('article', ['id' => 60, 'slug' => 'mon-super-article'])?>">blog</a>
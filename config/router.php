<?php


$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/page', 'page', 'page');
$router->map('GET', '/blog/[*:slug]-[i:id]', 'blog/article', 'article');

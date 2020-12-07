<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

//$router->setBasePath('/PHP_GraliKart/router/public');
$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/page', 'page', 'page');
$router->map('GET', '/blog/[*:slug]-[i:id]', 'blog/article', 'article');

$match = $router->match();

require '../elements/header.php';
if (is_array($match)) {
$params = $match['params'];
require "../templates/{$match['target']}.php";
} else {
require "../templates/404.php";
}
require '../elements/footer.php';



/*$router->map('GET', '/', function() {
require '../templates/home.php';
});

$router->map('GET', '/contact', function() {
//require '../templates/contact.php';
echo 'nous contacter';
});

$router->map('GET', '/blog/[*:slug]-[i:id]', function($slug, $id) {
    echo "Je suis sur l'article $slug avec le numéro $id";
});

$match = $router->match();
if ($match !== null){
    require '../elements/header.php';
    call_user_func_array($match['target'], $match['params']);
    require '../elements/footer.php';
}*/

<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

require '../config/router.php';



$match = $router->match();


if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        ob_start();
        require "../templates/{$match['target']}.php";
        $pageContant = ob_get_clean();
    }
    require '../elements/layout.php';
} else {
require "../templates/404.php";
}




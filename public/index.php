<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../framework/Database.php';

$route = $_SERVER['REQUEST_URI'];

if (strpos($route, '/links') !== false) {
    require_once __DIR__ . '/../app/controller/links.php';
    require_once __DIR__ . '/../resources/links.template.php';
} elseif (strpos($route, '/post') !== false) {
    require_once __DIR__ . '/../app/controller/post.php';
    require_once __DIR__ . '/../resources/post.template.php';
} else {
    echo "<h1>Bienvenido al Proyecto AdminEnlaces</h1>";
    echo "<p>Usa las rutas <a href='/links'>/links</a> o <a href='/post'>/post</a></p>";
}
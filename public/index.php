<?php
// public/index.php

// Activación de errores (esto debe ir DENTRO de las etiquetas <?php)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../framework/Database.php';

// IMPORTANTE: Comentamos la base de datos para que no bloquee tu tarea
// $db = new Database(); 

// Detectar la ruta para cargar el controlador y la vista correcta
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
<?php
function get_view_path(): string {
    $viewDir = __DIR__ . '/src/pages/';
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $basePath = '/lasso';
    $path = str_replace($basePath, '', $requestUri);

    if ($path === '' || $path === '/') {
        $path = 'home';
    }

    $route = basename($path);
    $routes = [
        'home' => 'home.php',
        'news' => 'news.php',
        'history' => 'history.php',
        'donation' => 'donation.php',
        'agenda' => 'agenda.php',
        'notices' => 'legal_notices.php',
        'gallery' => 'gallery.php',
        'contact' => 'contact.php'
    ];

    return isset($routes[$route])
        ? $viewDir . $routes[$route]
        : $viewDir . '404.php';
}

$computedPath = get_view_path();

require 'vendor/autoload.php';
require_once $computedPath;

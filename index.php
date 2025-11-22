<?php
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/src/views/';
$computedPath = __DIR__ . $viewDir;

// TODO: REMOVE THESES COMMENTS
//echo "<p>request: $request</p>";
//echo "<p>viewDir: $viewDir</p>";
//echo "<p>computedPath: $computedPath</p>";

switch ($request) {
    case '':
    case '/':
    case '/lasso/':
        $computedPath .= 'home.php';
        break;
    case '/lasso/contact':
        $computedPath .= 'contact.php';
        break;
    default:
        http_response_code(404);
        $computedPath .= '404.php';
        break;
}

// TODO : REMOVE THESES COMMENTS
//echo "<p>(AFTER) computedPath: $computedPath</p>";

require $computedPath;

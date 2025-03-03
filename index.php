<?php
// require_once './controllers/products.controller.php';

require_once __DIR__ . '/helpers/functions.php';

$uri = $_SERVER['REQUEST_URI'];


switch ($uri) {
    case '/internet-plans':
    case '/':
        require_once __DIR__ . '/controllers/products.controller.php';
        break;
    case '/pricing':
        require_once __DIR__ . '/controllers/pricing.controller.php';
        break;
    case '/features':
        require_once __DIR__ . '/controllers/features.controller.php';
        break;
    default:
        require_once __DIR__ . '/controllers/404.controller.php';
        break;
}
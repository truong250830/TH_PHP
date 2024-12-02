<?php
require_once __DIR__ . '/../controllers/ProductsController.php';

$page = $_GET['page'] ?? 'products';
$action = $_GET['action'] ?? 'index';

switch ($page) {
    case 'products':
        $controller = new ProductsController();
        break;
    default:
        die('Page not found');
}


if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die('Action not found');
}
?>


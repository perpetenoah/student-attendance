<?php
require __DIR__ . '/../boostrap/app.php';
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        require CONTROLLERS_PATH . '/HomeController.php';
        index();
        break;
    case '/presences':
        require CONTROLLERS_PATH . '/AttendanceController.php';
        index();
        break;
    case '/etudiants':
        require CONTROLLERS_PATH .'/StudentController.php';
        index();
        break;
    default:
        $title = '404';
        include VIEWS_PATH . '/404.php';
}

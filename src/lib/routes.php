<?php
namespace Luiscv\Idp\lib;
use Luiscv\Idp\controllers\Controller;

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    $home = new Controller;
    echo $home->render("index");
});
$router->get('/index.php', function() {
    $home = new Controller;
    echo $home->render("index");
});


$router->get('/publications.php', function() {
    $home = new Controller;
    echo $home->render("publications");
});

$router->get('/about.php', function() {
    $home = new Controller;
    echo $home->render("about");
});

$router->get('/contact.php', function() {
    $home = new Controller;
    echo $home->render("contact");
});

$router->get('/login.php', function() {
    $home = new Controller;
    echo $home->render("login");
});




//Error 404
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    require_once 'src/views/error404.php';
});

$router->run();
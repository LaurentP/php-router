<?php

require_once dirname(__DIR__) . '/php/controller/Router.php';
require_once dirname(__DIR__) . '/php/controller/HomeController.php';
require_once dirname(__DIR__) . '/php/controller/PostController.php';
require_once dirname(__DIR__) . '/php/controller/UserController.php';

use App\Router;

$url = $_GET['url'] ?? '/';

$router = new Router($url);

$router->add('/', 'App\HomeController:index')
    ->add('post/', 'App\PostController:index')
    ->add('post/{slug}', 'App\PostController:show')
    ->add('user/', 'App\UserController:index')
    ->add('user/{id}', 'App\UserController:show');

$router->run($url);

<?php

spl_autoload_register(function ($className) {
    require_once dirname(__DIR__) . '/app/controller/' . explode('\\', $className)[1] . '.php';
});

use App\Router;

$url = $_GET['url'] ?? '/';

$router = new Router($url);

$router->add('/', 'App\HomeController:index')
    ->add('post/', 'App\PostController:index')
    ->add('post/{slug}', 'App\PostController:show')
    ->add('user/', 'App\UserController:index')
    ->add('user/{id}', 'App\UserController:show')
    ->onError('App\ErrorController:index');

$router->run();

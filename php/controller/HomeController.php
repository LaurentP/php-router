<?php

namespace App;

class HomeController
{
    public function index(): void
    {
        require_once dirname(__DIR__) . '/view/index.php';
    }
}
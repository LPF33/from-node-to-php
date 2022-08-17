<?php

declare(strict_types=1);

class Router
{
    public static $viewsPath = '../src/views/';

    protected $routes = [];

    public static function load(string $file)
    {
        $router = new self();
        require $file;
        return $router;
    }

    public function setRoute(string $uri, string $controller)
    {
        $this->routes[$uri] = self::$viewsPath.$controller;
    }

    public function direct(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            require $this->routes[$uri];
            return;
        }

        $this->redirect('/');
    }

    public function redirect(string $uri)
    {
        header("Location: $uri", true);
    }
}

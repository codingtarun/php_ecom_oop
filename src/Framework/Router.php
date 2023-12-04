<?php

declare(strict_types=1);

namespace Framework;

/**
 * This file will contain all the route of the application.
 */


class Router
{

    private array $routes =  [];

    /**
     * Function will will accept the 3 parameters and save it to the `$routes` array.
     */
    public function add(string $method, string $path, array $controller)
    {
        /**
         * Before we can save the route to the array we need to do normalization of the input to avoid any route related problems.
         */

        $path = $this->normalizePath($path);

        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }

    private function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";

        $path = preg_replace('#[/]{2,}#', '/', $path);

        return $path;
    }

    public function dispatch(string $path, string $method, Container $container = null)
    {
        $path = $this->normalizePath($path);
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
                continue;
            }
            [$class, $function] = $route['controller'];

            $controllerInstance = $container ? $container->resolve($class) : new $class;

            $controllerInstance->$function();
        }
    }
}

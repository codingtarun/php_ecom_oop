<?php

declare(strict_types=1);

/**
 * ---------------------------------------------------------------------------------------------
 * This is where the basic setup of the framework is , we'll be calling the important functionality like route in this file.
 * 
 */

namespace Framework;

class App
{
    /**
     * Declaring a private variable i.e can't be accessed outside of the function
     */
    private Router $router;

    public function __construct()
    {
        /**
         * Assiging the object of 'Router' class to `$router` variable.
         * 
         * Since we are using `autoloader`  , when we create an object of the `Router` class , the file will be automatically included.
         * 
         */
        $this->router = new Router();
    }

    public function run()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $this->router->dispatch($path, $method);
    }

    public function get(string $path, array $controller)
    {
        $this->router->add('GET', $path, $controller);
    }
}

<?php

declare(strict_types=1);
/**
 * -----------------------------------------------------------------------------------
 * This is where we begin bootstraping our application
 * 
 * 1. First we include the aitoload function so that when we create an objec of the class , the class will be automatically included.
 * 2. `App` files has the all basic essential functions of the APP , like router etc.
 * 3. 
 */

require __DIR__ . '/../../vendor/autoload.php';

use Framework\App;
use function App\Config\registerRoutes;

$app = new App();

registerRoutes($app);

return $app;

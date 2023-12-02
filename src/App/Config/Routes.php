<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\HomeController;
use App\Controllers\AboutController;


function registerRoutes(App $app)
{
    /**
     * App Routes List Begin
     */
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'index']);
    /**
     * App Routes List Ends
     */
}

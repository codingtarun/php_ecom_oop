<?php

/**
 * ---------------------------------------------------------------------------------------------------------
 * This is where it all begin
 * ---------------------------------------------------------------------------------------------------------
 * 
 * Here we ae including the `functions.php` file & `bootstrap.php` file.
 * 
 * 
 * 
 * 
 */

include __DIR__ . '/../src/App/functions.php';


$app = include __DIR__ . '/../src/App/bootstrap.php';

$app->run();

<?php

declare(strict_types=1);

function dd(mixed $value)
{
    /**
     * ------------------------------------------------------------------------------
     * dd (die-dump function) : Dumps the input for debugging purpose 
     * ------------------------------------------------------------------------------
     */
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

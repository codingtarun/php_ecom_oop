<?php

declare(strict_types=1);

namespace Framework;

use ReflectionClass;

class Container
{
    private array $definations = [];

    public function addDefinations(array $newDefinations)
    {
        $this->definations = [...$this->definations, ...$newDefinations];
    }

    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);

        dd($reflectionClass);
    }
}

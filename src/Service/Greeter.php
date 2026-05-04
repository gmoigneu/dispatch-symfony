<?php

namespace App\Service;

class Greeter
{
    public function greet(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}

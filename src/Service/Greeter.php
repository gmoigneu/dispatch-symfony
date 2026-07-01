<?php

namespace App\Service;

class Greeter
{
    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }

    public function greetInFrench(string $name): string
    {
        return 'Bonjour, ' . $name . ' !';
    }
}
<?php

namespace App\Service;

class Greeter
{
    public function greet(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}

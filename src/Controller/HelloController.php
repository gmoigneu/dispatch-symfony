<?php

namespace App\Controller;

use App\Service\Greeter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    public function __construct(private readonly Greeter $greeter)
    {
    }

    #[Route('/', name: 'home', methods: ['GET'])]
    public function home(): JsonResponse
    {
        return $this->json([
            'app' => 'obvious-symfony',
            'message' => $this->greeter->greet('world'),
        ]);
    }

    #[Route('/hello/{name}', name: 'hello', methods: ['GET'], requirements: ['name' => '[a-zA-Z0-9_-]+'])]
    public function hello(string $name): JsonResponse
    {
        return $this->json([
            'message' => $this->greeter->greet($name),
        ]);
    }

    #[Route('/greeting/{name}', name: 'greeting', methods: ['GET'], requirements: ['name' => '[a-zA-Z0-9_-]+'])]
    public function greeting(string $name): JsonResponse
    {
        return $this->json([
            'greeting' => $this->greeter->greetInFrench($name),
        ]);
    }
}

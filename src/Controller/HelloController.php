<?php

namespace App\Controller;

use App\Service\Greeter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
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

    #[Route('/background', name: 'background', methods: ['GET'])]
    public function background(): Response
    {
        $html = '<!DOCTYPE html>'
            . '<html><head><style>body { background-color: #000000; color: #ffffff; }</style></head>'
            . '<body></body></html>';

        return new Response($html, 200, ['Content-Type' => 'text/html']);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/healthz', name: 'healthz', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/healthz', name: 'healthz', methods: ['GET'])]
    public function healthz(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}

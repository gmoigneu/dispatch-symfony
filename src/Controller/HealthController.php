<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/healthz', name: 'healthz', methods: ['GET', 'HEAD'])]
    public function healthz(): JsonResponse
    {
        return $this->json([
            'status' => 'ok',
        ]);
    }
}

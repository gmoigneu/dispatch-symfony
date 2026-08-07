<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StatusController extends AbstractController
{
    #[Route('/status', name: 'app_status', methods: ['GET', 'HEAD'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'status' => 'ok',
        ]);
    }
}

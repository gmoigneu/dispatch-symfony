<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class StatusController extends AbstractController
{
    public function status(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class SuspendController extends AbstractController
{
    #[Route('/suspend', name: 'app_suspend')]
    public function index(): JsonResponse
    {
        exec('sleep 10 && systemctl suspend');
        return $this->json([
            'message' => 'Triggered suspend via systemctl in 10 seconds',
            'path' => 'src/Controller/SuspendController.php',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WalidController extends AbstractController
{
    /**
     * @Route("/walid", name="app_walid")
     */
    public function index(): Response
    {
        return $this->render('walid/index.html.twig', [
            'controller_name' => 'WalidController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessBothUsersController extends AbstractController
{
    /**
     * @Route("/both", name="both")
     */
    public function index(): Response
    {
        return $this->render('access_both_users/index.html.twig', [
            'controller_name' => 'AccessBothUsersController',
        ]);
    }
}

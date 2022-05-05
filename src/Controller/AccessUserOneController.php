<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessUserOneController extends AbstractController
{
    /**
     * @Route("/one", name="one")
     */
    public function index(): Response
    {
        return $this->render('access_user_one/index.html.twig', [
            'controller_name' => 'AccessUserOneController',
        ]);
    }
}

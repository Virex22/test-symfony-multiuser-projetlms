<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessUSerTwoController extends AbstractController
{
    /**
     * @Route("/two", name="two")
     */
    public function index(): Response
    {
        return $this->render('access_u_ser_two/index.html.twig', [
            'controller_name' => 'AccessUSerTwoController',
        ]);
    }
}

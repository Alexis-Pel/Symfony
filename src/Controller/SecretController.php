<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecretController extends AbstractController
{
    /**
     * @Route("/secret/nsfw", name="secret")
     */
    public function index(): Response
    {
        return $this->render('secret/index.html.twig', [
            'controller_name' => 'SecretController',
            'site'=>'https://matias.ma/nsfw'
        ]);
    }

    /**
     * @Route("/secret/pac", name="secretPac")
     */
    public function pac(): Response
    {
        return $this->render('secret/index.html.twig', [
            'controller_name' => 'SecretController',
            'site'=>'https://pacman.cc/html5/'
        ]);
    }
}

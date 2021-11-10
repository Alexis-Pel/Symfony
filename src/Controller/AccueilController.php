<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AccueilController
{
    private $twig;
    public function __construct(Environment $twig){
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="accueil", methods={"GET"})
     */
    public function index()
    {
        return new Response($this->twig->render("accueil/index.html.twig"), 200);
    }

}
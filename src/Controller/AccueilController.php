<?php

namespace App\Controller;
use App\Repository\ObjetRepository;
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
    public function index(ObjetRepository $objetRepository)
    {
        $objets = $objetRepository->findAll();
        $random = rand(1, count($objets));
        $objet = $objetRepository->find($random);
        return new Response($this->twig->render("accueil/index.html.twig", ["objet"=>$objet]), 200);
    }

}
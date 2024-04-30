<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/{slug}', name: 'app_default')]
    public function index(string $slug = ''): Response
    {
        return $this->render('default/index.html.twig', [
            'slug' => $slug,
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/test', name: 'app_default_test', priority: 2)]
    public function test(): Response
    {
        return $this->file($this->getParameter('kernel.project_dir').'/public/files/file.pdf', 'show.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}

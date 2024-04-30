<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Routing\Attribute\AsRoutingConditionService;

#[AsRoutingConditionService(alias: 'route_checker')]
class RouteChecker
{
    public function check(Request $request): bool
    {
        // ...
    }
}

class RandomController extends AbstractController
{
    #[Route('/random/number/{slug}', name: 'random_number')]
    public function number(Request $request, LoggerInterface $logger, string $slug = ''): Response
    {
        if ($slug === 'notfound') {
            throw $this->createNotFoundException('Страница не доступна');
        }
        $get = $request->query->get('get');
        $number = random_int(0, 100);
        $logger->info('Show number ' . $number);
        return $this->render('random/number.html.twig',
            [
                'get'    => $get,
                'number' => $number,
                'slug'   => $slug
            ]
        );
    }

    #[Route('/random/service')]
    public function service(): Response
    {
        return new Response('<h1>' . env('APP_ENV') . '</h1>');
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */

    public function index(Request $request): Response
    {
//        return $this->render('conference/index.html.twig', [
//            'controller_name' => 'ConferenceController',
//        ]);
        $message = 'Hello world';
        if ($name = $request->query->get('hello')) {
            $message = sprintf('<h1>Hello %s</h1>', htmlspecialchars($name));
        }

        return new Response($message);
    }
}

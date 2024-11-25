<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/auth', name: 'app_auth')]
    public function index(UsersRepository $repository): Response
    {

        $logins = $repository->findAll();
        return $this->render('auth/index.html.twig', [
            'logins' => $logins
        ]);
    }
}

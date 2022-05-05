<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Pastebin extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(1, 100);

        return $this->render('view/header.html.twig', [
            'number' => $number,
        ]);
    }
}
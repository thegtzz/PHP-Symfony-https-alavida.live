<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/{_locale}/", methods={"GET"}, name="get_index", requirements={"_locale"="%locales_requirements%"})
     */
    public function indexAction(): Response
    {
        return $this->render('index.html.twig');
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * App generic actions and locales root handling.
 */
class AppController extends AbstractController
{
    /**
     * @Route("/", name="root")
     */
    public function root(Request $request): Response
    {
        $locale = $request->getPreferredLanguage($this->getParameter('activated_locales'));

        return $this->redirectToRoute('get_index', ['_locale' => $locale]);
    }
}
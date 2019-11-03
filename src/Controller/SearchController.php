<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search_result", methods={"GET"}, name="get_search_result")
     */
    public function searchAction()
    {
        return $this->render('search_result.html.twig');
    }
}
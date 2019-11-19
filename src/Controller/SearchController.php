<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/{_locale}/search_result", methods={"GET"}, name="get_search_result", requirements={"_locale"="%locales_requirements%"})
     */
    public function indexAction(Request $request, PostRepository $postRepository): Response
    {
        $posts = $postRepository->search($request->query->all());
        $location = $request->get('filter-location');

        return $this->render('search_result.html.twig', ['posts' => $posts, 'location' => $location]);
    }
}

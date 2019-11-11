<?php


namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search_result", methods={"GET","POST"}, name="get_search_result")
     */
    public function searchAction(Request $request, PostRepository $postRepository)
    {
        $posts = $postRepository->find(10);
        return $this->render('search_result.html.twig', ['posts' => $posts]);
    }
}
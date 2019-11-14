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
     * @Route("/search_result", methods={"GET","POST"}, name="search_result")
     */
    public function indexAction(Request $request, PostRepository $postRepository): Response
    {
        if ($request->isMethod('POST')){

            $posts = $postRepository->search($request->request->all());

            return $this->render('search_result.html.twig', ['posts' => $posts]);
        }

        $posts = $postRepository->findAll();

        return $this->render('search_result.html.twig', ['posts' => $posts]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostDetailsController extends AbstractController
{
    /**
     * @Route("/{_locale}/post_details/{id}", methods={"GET"}, name="get_post_details", requirements={"_locale"="%locales_requirements%"})
     */
    public function PostDetailAction(Post $post, PostRepository $postRepository): Response
    {
        $postsSimilar = $postRepository->findBy(['location'=> $post->getLocation()], ['id' => 'DESC'], 3);

        return $this->render('post-details.html.twig',
            [
                'post' => $post,
                'postsSimilar' => $postsSimilar,
                ]);
    }
}

<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostDetailsController extends AbstractController
{
    /**
     * @Route("/post_details", methods={"GET"}, name="get_post_details")
     */
    public function PostDetailAction()
    {
        return $this->render('post-details.html.twig');
    }
}
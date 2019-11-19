<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostDetailsController extends AbstractController
{
    /**
     * @Route("/{_locale}/post_details", methods={"GET"}, name="get_post_details", requirements={"_locale"="%locales_requirements%"})
     */
    public function PostDetailAction()
    {
        return $this->render('post-details.html.twig');
    }
}

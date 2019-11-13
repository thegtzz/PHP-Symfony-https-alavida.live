<?php

namespace App\Controller;

use App\Repository\ContactInformationRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="get_index")
     */
    public function indexAction(CategoryRepository $categoryRepository, ContactInformationRepository $contactInformationRepository)
    {
        $categories = $categoryRepository->findAll();
        $contactInfo = $contactInformationRepository->findAll();

        return $this->render('index.html.twig',
            ['categories' => $categories, 'contactInfo' => $contactInfo,]);
    }
}

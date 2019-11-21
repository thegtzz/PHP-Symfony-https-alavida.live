<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CustomerReviewRepository;
use App\Repository\PostRepository;
use App\Repository\StaffRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/{_locale}/", methods={"GET"}, name="get_index", requirements={"_locale"="%locales_requirements%"})
     */
    public function indexAction(
        Request $request,
        PostRepository $postRepository,
        StaffRepository $staffRepository,
        CustomerReviewRepository $customerReviewRepository
    ): Response
    {
        $postsIsles      = $postRepository->findByCategories([Category::ISLAND_CATEGORY, Category::GROUND_CATEGORY], 3);
        $postsHouse      = $postRepository->findByCategories([Category::HOUSE_CATEGORY, Category::APARTMENT_CATEGORY], 4);
        $postsInvestment = $postRepository->findByCategories([Category::INVESTMENT_CATEGORY], 3);

        $categories = $request->get('filter-property-type');
        $customers  = $customerReviewRepository->findBy([], ['id' => 'DESC'], 3);
        $staffs     = $staffRepository->findBy([], ['id' => 'DESC'], 3);

        return $this->render('index.html.twig',
            [
                'postsIsles'      => $postsIsles,
                'postsHouse'      => $postsHouse,
                'postsInvestment' => $postsInvestment,
                'categories'      => $categories,
                'customers'       => $customers,
                'staffs'          => $staffs
            ]
        );
    }
}

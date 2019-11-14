<?php

namespace App\Service;

use App\Repository\CategoryRepository;

class SearchService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories()
    {
        return $this->categoryRepository->findAll();
    }
}
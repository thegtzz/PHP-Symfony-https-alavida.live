<?php

namespace App\Service;

use App\Repository\CategoryRepository;
use App\Repository\LocationRepository;

class SearchService
{
    private $categoryRepository;

    private $locationRepository;

    public function __construct(CategoryRepository $categoryRepository, LocationRepository $locationRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->locationRepository = $locationRepository;
    }

    public function getCategories()
    {
        return $this->categoryRepository->findAll();
    }

    public function getLocations()
    {
        return $this->locationRepository->findAll();
    }
}

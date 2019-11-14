<?php

namespace App\Service;

use App\Repository\ContactInformationRepository;

class ContactInfoService
{
    private $contactInformation;

    public function __construct(ContactInformationRepository $contactInformationRepository)
    {
        $contactInformation = $contactInformationRepository->findAll();
        $this->contactInformation = end($contactInformation);
    }

    public function getContactInformation()
    {
        return $this->contactInformation;
    }
}

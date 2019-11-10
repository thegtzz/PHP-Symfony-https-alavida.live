<?php


namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\FormMapper;

final class PostImagesAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', FileType::class, [
                'required' => false
            ])
        ;
    }

    public function prePersist($postimages)
    {
        $this->manageFileUpload($postimages);
    }

    public function preUpdate($postimages)
    {
        $this->manageFileUpload($postimages);
    }

    private function manageFileUpload($postimages)
    {
        if ($postimages->getFile()) {
            $postimages->refreshUpdated();
        }
    }
}
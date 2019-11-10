<?php


namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\FormMapper;


final class AvatarImageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', FileType::class, [
                'required' => false
            ])
        ;
    }

    public function prePersist($avatarimage)
    {
        $this->manageFileUpload($avatarimage);
    }

    public function preUpdate($avatarimage)
    {
        $this->manageFileUpload($avatarimage);
    }

    private function manageFileUpload($avatarimage)
    {
        if ($avatarimage->getFile()) {
            $avatarimage->refreshUpdated();
        }
    }

}
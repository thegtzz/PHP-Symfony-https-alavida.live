<?php


namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\FormMapper;

final class CustomerAvatarAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', FileType::class, [
                'required' => false
            ])
        ;
    }

    public function prePersist($customeravatar)
    {
        $this->manageFileUpload($customeravatar);
    }

    public function preUpdate($customeravatar)
    {
        $this->manageFileUpload($customeravatar);
    }

    private function manageFileUpload($customeravatar)
    {
        if ($customeravatar->getFile()) {
            $customeravatar->refreshUpdated();
        }
    }
}
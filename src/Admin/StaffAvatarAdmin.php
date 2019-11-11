<?php


namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\FormMapper;

final class StaffAvatarAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', FileType::class, [
                'required' => false
            ])
        ;
    }

    public function prePersist($staffavatar)
    {
        $this->manageFileUpload($staffavatar);
    }

    public function preUpdate($staffavatar)
    {
        $this->manageFileUpload($staffavatar);
    }

    private function manageFileUpload($staffavatar)
    {
        if ($staffavatar->getFile()) {
            $staffavatar->refreshUpdated();
        }
    }
}
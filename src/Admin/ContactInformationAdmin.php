<?php


namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class ContactInformationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email', TextType::class)
            ->add('phoneNumber1', TextType::class)
            ->add('phoneNumber2', TextType::class, ['required' => false])
            ->add('phoneNumber3', TextType::class, ['required' => false])
            ->add('facebook', TextType::class, ['required' => false])
            ->add('instagram', TextType::class, ['required' => false])
            ->add('linkedin', TextType::class, ['required' => false])
            ->add('address', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('phoneNumber1')
            ->add('phoneNumber2')
            ->add('phoneNumber3')
            ->add('facebook')
            ->add('instagram')
            ->add('linkedin')
            ->add('address');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
            ->addIdentifier('phoneNumber1')
            ->addIdentifier('phoneNumber2')
            ->addIdentifier('phoneNumber3')
            ->addIdentifier('facebook')
            ->addIdentifier('instagram')
            ->addIdentifier('linkedin')
            ->addIdentifier('address');
    }
}

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
            ->add('socialMedia1', TextType::class, ['required' => false])
            ->add('socialMedia2', TextType::class, ['required' => false])
            ->add('socialMedia3', TextType::class, ['required' => false])
            ->add('socialMedia4', TextType::class, ['required' => false])
            ->add('socialMedia5', TextType::class, ['required' => false])
            ->add('address', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('phoneNumber1')
            ->add('phoneNumber2')
            ->add('phoneNumber3')
            ->add('socialMedia1')
            ->add('socialMedia2')
            ->add('socialMedia3')
            ->add('socialMedia4')
            ->add('socialMedia5')
            ->add('address');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
            ->addIdentifier('phoneNumber1')
            ->addIdentifier('phoneNumber2')
            ->addIdentifier('phoneNumber3')
            ->addIdentifier('socialMedia1')
            ->addIdentifier('socialMedia2')
            ->addIdentifier('socialMedia3')
            ->addIdentifier('socialMedia4')
            ->addIdentifier('socialMedia5')
            ->addIdentifier('address');
    }
}

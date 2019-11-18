<?php


namespace App\Admin;

use App\Entity\CustomerAvatar;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\AdminType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class CustomerReviewAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('customerAvatar', AdminType::class, [
                'delete' => false,
            ])
            ->add('customerShortReviewRu', TextType::class, ['required' => false])
            ->add('customerShortReviewEn', TextType::class, ['required' => false])
            ->add('customerShortReviewPl', TextType::class, ['required' => false])
            ->add('customerShortReviewFr', TextType::class, ['required' => false])
            ->add('customerMainReviewRu', TextType::class, ['required' => false])
            ->add('customerMainReviewEn', TextType::class, ['required' => false])
            ->add('customerMainReviewPl', TextType::class, ['required' => false])
            ->add('customerMainReviewFr', TextType::class, ['required' => false])
            ->add('customerName', TextType::class, ['required' => false]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('customerAvatar')
            ->add('customerShortReviewRu')
            ->add('customerShortReviewEn')
            ->add('customerShortReviewPl')
            ->add('customerShortReviewFr')
            ->add('customerMainReviewRu')
            ->add('customerMainReviewEn')
            ->add('customerMainReviewPl')
            ->add('customerMainReviewFr')
            ->add('customerName');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('customerAvatar')
            ->addIdentifier('customerShortReviewRu')
            ->addIdentifier('customerShortReviewEn')
            ->addIdentifier('customerShortReviewPl')
            ->addIdentifier('customerShortReviewFr')
            ->addIdentifier('customerMainReviewRu')
            ->addIdentifier('customerMainReviewEn')
            ->addIdentifier('customerMainReviewPl')
            ->addIdentifier('customerMainReviewFr')
            ->addIdentifier('customerName');
    }

    public function prePersist($page)
    {
        $this->manageEmbeddedImageAdmins($page);
    }

    public function preUpdate($page)
    {
        $this->manageEmbeddedImageAdmins($page);
    }

    private function manageEmbeddedImageAdmins($page)
    {
        // Cycle through each field
        foreach ($this->getFormFieldDescriptions() as $fieldName => $fieldDescription) {
            // detect embedded Admins that manage Images
            if ($fieldDescription->getType() === 'sonata_type_admin' &&
                ($associationMapping = $fieldDescription->getAssociationMapping()) &&
                ($associationMapping['targetEntity'] === 'App\Entity\CustomerAvatar')
            ) {
                $getter = 'get'.$fieldName;
                $setter = 'set'.$fieldName;

                /** @var CustomerAvatar $image */
                $image = $page->$getter();

                if ($image) {
                    if ($image->getFile()) {
                        // update the Image to trigger file management
                        $image->refreshUpdated();
                    } elseif (!$image->getFile() && !$image->getFilename()) {
                        // prevent Sf/Sonata trying to create and persist an empty Image
                        $page->$setter(null);
                    }
                }
            }
        }
    }
}
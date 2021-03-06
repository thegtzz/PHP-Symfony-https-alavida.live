<?php


namespace App\Admin;


use App\Entity\StaffAvatar;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\AdminType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class StaffAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('staffAvatar', AdminType::class, [
                'delete' => false,
            ])
            ->add('staffNameRu', TextType::class, ['required' => false])
            ->add('staffNameEn', TextType::class, ['required' => false])
            ->add('staffNamePl', TextType::class, ['required' => false])
            ->add('staffNameFr', TextType::class, ['required' => false])
            ->add('staffPositionRu', TextType::class, ['required' => false])
            ->add('staffPositionEn', TextType::class, ['required' => false])
            ->add('staffPositionPl', TextType::class, ['required' => false])
            ->add('staffPositionFr', TextType::class, ['required' => false])
            ->add('staffEmail', TextType::class, ['required' => false])
            ->add('staffPhone', TextType::class, ['required' => false]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('staffAvatar')
            ->add('staffNameRu')
            ->add('staffNameEn')
            ->add('staffNamePl')
            ->add('staffNameFr')
            ->add('staffPositionRu')
            ->add('staffPositionEn')
            ->add('staffPositionPl')
            ->add('staffPositionFr')
            ->add('staffEmail')
            ->add('staffPhone');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('staffAvatar')
            ->addIdentifier('staffNameRu')
            ->addIdentifier('staffNameEn')
            ->addIdentifier('staffNamePl')
            ->addIdentifier('staffNameFr')
            ->addIdentifier('staffPositionRu')
            ->addIdentifier('staffPositionEn')
            ->addIdentifier('staffPositionPl')
            ->addIdentifier('staffPositionFr')
            ->addIdentifier('staffEmail')
            ->addIdentifier('staffPhone');
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
                ($associationMapping['targetEntity'] === 'App\Entity\StaffAvatar')
            ) {
                $getter = 'get'.$fieldName;
                $setter = 'set'.$fieldName;

                /** @var StaffAvatar $image */
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
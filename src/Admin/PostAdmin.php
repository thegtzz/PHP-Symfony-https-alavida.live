<?php
namespace App\Admin;

use App\Entity\PostImages;
use App\Entity\ImageAvatar;
use App\Entity\Category;
use App\Form\PostImageType;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\AdminType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', TextType::class)
            ->add('imageAvatar', AdminType::class, [
                'delete' => false,
            ])
            ->add('postImages', CollectionType::class, [
                'entry_type'   		=> PostImageType::class,
                'allow_add'			=> true,
                'allow_delete'		=> true,
                'by_reference' 		=> false,
                'required'			=> false,
            ])
            ->add('location', TextType::class)
            ->add('status', TextType::class)
            ->add('propertyType', TextType::class)
            ->add('contract', TextType::class)
            ->add('price', TextType::class)
            ->add('square', TextType::class)
            ->add('propertyName', TextType::class)
            ->add('contactPerson', TextType::class)
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function(CategoryRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'choice_value' => 'id',
            ])
            ->add('propertyDescription', TextType::class)
            ->add('youtubeLink', TextType::class)
            ->add('publicFacilitiesDistance1', TextType::class)
            ->add('publicFacilitiesDescription1', TextType::class)
            ->add('publicFacilitiesDistance2', TextType::class)
            ->add('publicFacilitiesDescription2', TextType::class)
            ->add('publicFacilitiesDistance3', TextType::class)
            ->add('publicFacilitiesDescription3', TextType::class)
            ->add('publicFacilitiesDistance4', TextType::class)
            ->add('publicFacilitiesDescription4', TextType::class)
            ->add('publicFacilitiesDistance5', TextType::class)
            ->add('publicFacilitiesDescription5', TextType::class)
            ->add('publicFacilitiesDistance6', TextType::class)
            ->add('publicFacilitiesDescription6', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('imageAvatar')
            ->add('postImages')
            ->add('location')
            ->add('status')
            ->add('propertyType')
            ->add('contract')
            ->add('price')
            ->add('square')
            ->add('propertyName')
            ->add('contactPerson')
            ->add('category')
            ->add('propertyDescription')
            ->add('youtubeLink')
            ->add('publicFacilitiesDistance1')
            ->add('publicFacilitiesDescription1')
            ->add('publicFacilitiesDistance2')
            ->add('publicFacilitiesDescription2')
            ->add('publicFacilitiesDistance3')
            ->add('publicFacilitiesDescription3')
            ->add('publicFacilitiesDistance4')
            ->add('publicFacilitiesDescription4')
            ->add('publicFacilitiesDistance5')
            ->add('publicFacilitiesDescription5')
            ->add('publicFacilitiesDistance6')
            ->add('publicFacilitiesDescription6');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('imageAvatar')
            ->addIdentifier('postImages')
            ->addIdentifier('location')
            ->addIdentifier('status')
            ->addIdentifier('propertyType')
            ->addIdentifier('contract')
            ->addIdentifier('price')
            ->addIdentifier('square')
            ->addIdentifier('propertyName')
            ->addIdentifier('contactPerson')
            ->addIdentifier('category')
            ->addIdentifier('propertyDescription')
            ->addIdentifier('youtubeLink')
            ->addIdentifier('publicFacilitiesDistance1')
            ->addIdentifier('publicFacilitiesDescription1')
            ->addIdentifier('publicFacilitiesDistance2')
            ->addIdentifier('publicFacilitiesDescription2')
            ->addIdentifier('publicFacilitiesDistance3')
            ->addIdentifier('publicFacilitiesDescription3')
            ->addIdentifier('publicFacilitiesDistance4')
            ->addIdentifier('publicFacilitiesDescription4')
            ->addIdentifier('publicFacilitiesDistance5')
            ->addIdentifier('publicFacilitiesDescription5')
            ->addIdentifier('publicFacilitiesDistance6')
            ->addIdentifier('publicFacilitiesDescription6');
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
                $associationMapping['targetEntity'] === 'App\Entity\ImageAvatar'
            ) {
                $getter = 'get'.$fieldName;
                $setter = 'set'.$fieldName;

                /** @var ImageAvatar $image */
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
<?php
namespace App\Admin;

use App\Entity\ImageAvatar;
use App\Entity\Category;
use App\Entity\Location;
use App\Form\PostImageType;
use App\Repository\CategoryRepository;
use App\Repository\LocationRepository;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\AdminType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('titleRu', TextType::class, ['required' => false])
            ->add('titleEn', TextType::class, ['required' => false])
            ->add('titlePl', TextType::class, ['required' => false])
            ->add('titleFr', TextType::class, ['required' => false])
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
            ->add('location', EntityType::class, [
                'class' => Location::class,
                'query_builder' => function(LocationRepository $er) {
                    return$er->createQueryBuilder('l')
                        ->orderBy('l.name', 'ASC');
                },
                'choice_label' => 'name',
                'choice_value' => 'id',
            ])
            ->add('statusRu', TextType::class, ['required' => false])
            ->add('statusEn', TextType::class, ['required' => false])
            ->add('statusPl', TextType::class, ['required' => false])
            ->add('statusFr', TextType::class, ['required' => false])
            ->add('propertyTypeRu', TextType::class, ['required' => false])
            ->add('propertyTypeEn', TextType::class, ['required' => false])
            ->add('propertyTypePl', TextType::class, ['required' => false])
            ->add('propertyTypeFr', TextType::class, ['required' => false])
            ->add('contractRu', TextType::class, ['required' => false])
            ->add('contractEn', TextType::class, ['required' => false])
            ->add('contractPl', TextType::class, ['required' => false])
            ->add('contractFr', TextType::class, ['required' => false])
            ->add('price', NumberType::class, ['required' => false])
            ->add('square', NumberType::class, ['required' => false])
            ->add('propertyNameRu', TextType::class, ['required' => false])
            ->add('propertyNameEn', TextType::class, ['required' => false])
            ->add('propertyNamePl', TextType::class, ['required' => false])
            ->add('propertyNameFr', TextType::class, ['required' => false])
            ->add('contactPersonRu', TextType::class, ['required' => false])
            ->add('contactPersonEn', TextType::class, ['required' => false])
            ->add('contactPersonPl', TextType::class, ['required' => false])
            ->add('contactPersonFr', TextType::class, ['required' => false])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function(CategoryRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'choice_value' => 'id',
            ])
            ->add('propertyDescriptionRu', TextareaType::class, ['required' => false])
            ->add('propertyDescriptionEn', TextareaType::class, ['required' => false])
            ->add('propertyDescriptionPl', TextareaType::class, ['required' => false])
            ->add('propertyDescriptionFr', TextareaType::class, ['required' => false])
            ->add('youtubeLink', TextType::class, ['required' => false])
            ->add('publicFacilitiesDistance1', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription1Ru', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription1En', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription1Pl', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription1Fr', TextType::class, ['required' => false])
            ->add('publicFacilitiesDistance2', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription2Ru', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription2En', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription2Pl', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription2Fr', TextType::class, ['required' => false])
            ->add('publicFacilitiesDistance3', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription3Ru', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription3En', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription3Pl', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription3Fr', TextType::class, ['required' => false])
            ->add('publicFacilitiesDistance4', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription4Ru', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription4En', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription4Pl', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription4Fr', TextType::class, ['required' => false])
            ->add('publicFacilitiesDistance5', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription5Ru', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription5En', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription5Pl', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription5Fr', TextType::class, ['required' => false])
            ->add('publicFacilitiesDistance6', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription6Ru', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription6En', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription6Pl', TextType::class, ['required' => false])
            ->add('publicFacilitiesDescription6Fr', TextType::class, ['required' => false]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titleRu')
            ->add('titleEn')
            ->add('titlePl')
            ->add('titleFr')
            ->add('imageAvatar')
            ->add('postImages')
            ->add('location')
            ->add('statusRu')
            ->add('statusEn')
            ->add('statusPl')
            ->add('statusFr')
            ->add('propertyTypeRu')
            ->add('propertyTypeEn')
            ->add('propertyTypePl')
            ->add('propertyTypeFr')
            ->add('contractRu')
            ->add('contractEn')
            ->add('contractPl')
            ->add('contractFr')
            ->add('price')
            ->add('square')
            ->add('propertyNameRu')
            ->add('propertyNameEn')
            ->add('propertyNamePl')
            ->add('propertyNameFr')
            ->add('contactPersonRu')
            ->add('contactPersonEn')
            ->add('contactPersonPl')
            ->add('contactPersonFr')
            ->add('category')
            ->add('propertyDescriptionRu')
            ->add('propertyDescriptionEn')
            ->add('propertyDescriptionPl')
            ->add('propertyDescriptionFr')
            ->add('youtubeLink')
            ->add('publicFacilitiesDistance1')
            ->add('publicFacilitiesDescription1Ru')
            ->add('publicFacilitiesDescription1En')
            ->add('publicFacilitiesDescription1Pl')
            ->add('publicFacilitiesDescription1Fr')
            ->add('publicFacilitiesDistance2')
            ->add('publicFacilitiesDescription2Ru')
            ->add('publicFacilitiesDescription2En')
            ->add('publicFacilitiesDescription2Pl')
            ->add('publicFacilitiesDescription2Fr')
            ->add('publicFacilitiesDistance3')
            ->add('publicFacilitiesDescription3Ru')
            ->add('publicFacilitiesDescription3En')
            ->add('publicFacilitiesDescription3Pl')
            ->add('publicFacilitiesDescription3Fr')
            ->add('publicFacilitiesDistance4')
            ->add('publicFacilitiesDescription4Ru')
            ->add('publicFacilitiesDescription4En')
            ->add('publicFacilitiesDescription4Pl')
            ->add('publicFacilitiesDescription4Fr')
            ->add('publicFacilitiesDistance5')
            ->add('publicFacilitiesDescription5Ru')
            ->add('publicFacilitiesDescription5En')
            ->add('publicFacilitiesDescription5Pl')
            ->add('publicFacilitiesDescription5Fr')
            ->add('publicFacilitiesDistance6')
            ->add('publicFacilitiesDescription6Ru')
            ->add('publicFacilitiesDescription6En')
            ->add('publicFacilitiesDescription6Pl')
            ->add('publicFacilitiesDescription6Fr');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('titleRu')
            ->addIdentifier('titleEn')
            ->addIdentifier('titlePl')
            ->addIdentifier('titleFr')
            ->addIdentifier('imageAvatar')
            ->addIdentifier('postImages')
            ->addIdentifier('location')
            ->addIdentifier('statusRu')
            ->addIdentifier('statusEn')
            ->addIdentifier('statusPl')
            ->addIdentifier('statusFr')
            ->addIdentifier('propertyTypeRu')
            ->addIdentifier('propertyTypeEn')
            ->addIdentifier('propertyTypePl')
            ->addIdentifier('propertyTypeFr')
            ->addIdentifier('contractRu')
            ->addIdentifier('contractEn')
            ->addIdentifier('contractPl')
            ->addIdentifier('contractFr')
            ->addIdentifier('price')
            ->addIdentifier('square')
            ->addIdentifier('propertyNameRu')
            ->addIdentifier('propertyNameEn')
            ->addIdentifier('propertyNamePl')
            ->addIdentifier('propertyNameFr')
            ->addIdentifier('contactPersonRu')
            ->addIdentifier('contactPersonEn')
            ->addIdentifier('contactPersonPl')
            ->addIdentifier('contactPersonFr')
            ->addIdentifier('category')
            ->addIdentifier('propertyDescriptionRu')
            ->addIdentifier('propertyDescriptionEn')
            ->addIdentifier('propertyDescriptionPl')
            ->addIdentifier('propertyDescriptionFr')
            ->addIdentifier('youtubeLink')
            ->addIdentifier('publicFacilitiesDistance1')
            ->addIdentifier('publicFacilitiesDescription1Ru')
            ->addIdentifier('publicFacilitiesDescription1En')
            ->addIdentifier('publicFacilitiesDescription1Pl')
            ->addIdentifier('publicFacilitiesDescription1Fr')
            ->addIdentifier('publicFacilitiesDistance2')
            ->addIdentifier('publicFacilitiesDescription2Ru')
            ->addIdentifier('publicFacilitiesDescription2En')
            ->addIdentifier('publicFacilitiesDescription2Pl')
            ->addIdentifier('publicFacilitiesDescription2Fr')
            ->addIdentifier('publicFacilitiesDistance3')
            ->addIdentifier('publicFacilitiesDescription3Ru')
            ->addIdentifier('publicFacilitiesDescription3En')
            ->addIdentifier('publicFacilitiesDescription3Pl')
            ->addIdentifier('publicFacilitiesDescription3Fr')
            ->addIdentifier('publicFacilitiesDistance4')
            ->addIdentifier('publicFacilitiesDescription4Ru')
            ->addIdentifier('publicFacilitiesDescription4En')
            ->addIdentifier('publicFacilitiesDescription4Pl')
            ->addIdentifier('publicFacilitiesDescription4Fr')
            ->addIdentifier('publicFacilitiesDistance5')
            ->addIdentifier('publicFacilitiesDescription5Ru')
            ->addIdentifier('publicFacilitiesDescription5En')
            ->addIdentifier('publicFacilitiesDescription5Pl')
            ->addIdentifier('publicFacilitiesDescription5Fr')
            ->addIdentifier('publicFacilitiesDistance6')
            ->addIdentifier('publicFacilitiesDescription6Ru')
            ->addIdentifier('publicFacilitiesDescription6En')
            ->addIdentifier('publicFacilitiesDescription6Pl')
            ->addIdentifier('publicFacilitiesDescription6Fr');
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
                ($associationMapping['targetEntity'] === 'App\Entity\ImageAvatar')
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
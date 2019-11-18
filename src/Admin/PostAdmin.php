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
            ->add('overviewLocationRu', TextType::class, ['required' => false])
            ->add('overviewLocationEn', TextType::class, ['required' => false])
            ->add('overviewLocationPl', TextType::class, ['required' => false])
            ->add('overviewLocationFr', TextType::class, ['required' => false])
            ->add('location', EntityType::class, [
                'class' => Location::class,
                'query_builder' => function(LocationRepository $er) {
                    return$er->createQueryBuilder('l')
                        ->orderBy('l.name', 'ASC');
                },
                'choice_label' => 'name',
                'choice_value' => 'id',
            ])
            ->add('overviewStatusRu', TextType::class, ['required' => false])
            ->add('overviewStatusEn', TextType::class, ['required' => false])
            ->add('overviewStatusPl', TextType::class, ['required' => false])
            ->add('overviewStatusFr', TextType::class, ['required' => false])
            ->add('statusRu', TextType::class, ['required' => false])
            ->add('statusEn', TextType::class, ['required' => false])
            ->add('statusPl', TextType::class, ['required' => false])
            ->add('statusFr', TextType::class, ['required' => false])
            ->add('overviewTypeRu', TextType::class, ['required' => false])
            ->add('overviewTypeEn', TextType::class, ['required' => false])
            ->add('overviewTypePl', TextType::class, ['required' => false])
            ->add('overviewTypeFr', TextType::class, ['required' => false])
            ->add('propertyTypeRu', TextType::class, ['required' => false])
            ->add('propertyTypeEn', TextType::class, ['required' => false])
            ->add('propertyTypePl', TextType::class, ['required' => false])
            ->add('propertyTypeFr', TextType::class, ['required' => false])
            ->add('overviewContractRu', TextType::class, ['required' => false])
            ->add('overviewContractEn', TextType::class, ['required' => false])
            ->add('overviewContractPl', TextType::class, ['required' => false])
            ->add('overviewContractFr', TextType::class, ['required' => false])
            ->add('contractRu', TextType::class, ['required' => false])
            ->add('contractEn', TextType::class, ['required' => false])
            ->add('contractPl', TextType::class, ['required' => false])
            ->add('contractFr', TextType::class, ['required' => false])
            ->add('overviewPriceRu', TextType::class, ['required' => false])
            ->add('overviewPriceEn', TextType::class, ['required' => false])
            ->add('overviewPricePl', TextType::class, ['required' => false])
            ->add('overviewPriceFr', TextType::class, ['required' => false])
            ->add('price', NumberType::class, ['required' => false])
            ->add('overviewSquareRu', TextType::class, ['required' => false])
            ->add('overviewSquareEn', TextType::class, ['required' => false])
            ->add('overviewSquarePl', TextType::class, ['required' => false])
            ->add('overviewSquareFr', TextType::class, ['required' => false])
            ->add('square', NumberType::class, ['required' => false])
            ->add('overviewNameRu', TextType::class, ['required' => false])
            ->add('overviewNameEn', TextType::class, ['required' => false])
            ->add('overviewNamePl', TextType::class, ['required' => false])
            ->add('overviewNameFr', TextType::class, ['required' => false])
            ->add('propertyNameRu', TextType::class, ['required' => false])
            ->add('propertyNameEn', TextType::class, ['required' => false])
            ->add('propertyNamePl', TextType::class, ['required' => false])
            ->add('propertyNameFr', TextType::class, ['required' => false])
            ->add('overviewPersonRu', TextType::class, ['required' => false])
            ->add('overviewPersonEn', TextType::class, ['required' => false])
            ->add('overviewPersonPl', TextType::class, ['required' => false])
            ->add('overviewPersonFr', TextType::class, ['required' => false])
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
            ->add('overviewLocationRu')
            ->add('overviewLocationEn')
            ->add('overviewLocationPl')
            ->add('overviewLocationFr')
            ->add('location')
            ->add('overviewStatusRu')
            ->add('overviewStatusEn')
            ->add('overviewStatusPl')
            ->add('overviewStatusFr')
            ->add('statusRu')
            ->add('statusEn')
            ->add('statusPl')
            ->add('statusFr')
            ->add('overviewTypeRu')
            ->add('overviewTypeEn')
            ->add('overviewTypePl')
            ->add('overviewTypeFr')
            ->add('propertyTypeRu')
            ->add('propertyTypeEn')
            ->add('propertyTypePl')
            ->add('propertyTypeFr')
            ->add('overviewContractRu')
            ->add('overviewContractEn')
            ->add('overviewContractPl')
            ->add('overviewContractFr')
            ->add('contractRu')
            ->add('contractEn')
            ->add('contractPl')
            ->add('contractFr')
            ->add('overviewPriceRu')
            ->add('overviewPriceEn')
            ->add('overviewPricePl')
            ->add('overviewPriceFr')
            ->add('price')
            ->add('overviewSquareRu')
            ->add('overviewSquareEn')
            ->add('overviewSquarePl')
            ->add('overviewSquareFr')
            ->add('square')
            ->add('overviewNameRu')
            ->add('overviewNameEn')
            ->add('overviewNamePl')
            ->add('overviewNameFr')
            ->add('propertyNameRu')
            ->add('propertyNameEn')
            ->add('propertyNamePl')
            ->add('propertyNameFr')
            ->add('overviewPersonRu')
            ->add('overviewPersonEn')
            ->add('overviewPersonPl')
            ->add('overviewPersonFr')
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
            ->addIdentifier('overviewLocationRu')
            ->addIdentifier('overviewLocationEn')
            ->addIdentifier('overviewLocationPl')
            ->addIdentifier('overviewLocationFr')
            ->addIdentifier('location')
            ->addIdentifier('overviewStatusRu')
            ->addIdentifier('overviewStatusEn')
            ->addIdentifier('overviewStatusPl')
            ->addIdentifier('overviewStatusFr')
            ->addIdentifier('statusRu')
            ->addIdentifier('statusEn')
            ->addIdentifier('statusPl')
            ->addIdentifier('statusFr')
            ->addIdentifier('overviewTypeRu')
            ->addIdentifier('overviewTypeEn')
            ->addIdentifier('overviewTypePl')
            ->addIdentifier('overviewTypeFr')
            ->addIdentifier('propertyTypeRu')
            ->addIdentifier('propertyTypeEn')
            ->addIdentifier('propertyTypePl')
            ->addIdentifier('propertyTypeFr')
            ->addIdentifier('overviewContractRu')
            ->addIdentifier('overviewContractEn')
            ->addIdentifier('overviewContractPl')
            ->addIdentifier('overviewContractFr')
            ->addIdentifier('contractRu')
            ->addIdentifier('contractEn')
            ->addIdentifier('contractPl')
            ->addIdentifier('contractFr')
            ->addIdentifier('overviewPriceRu')
            ->addIdentifier('overviewPriceEn')
            ->addIdentifier('overviewPricePl')
            ->addIdentifier('overviewPriceFr')
            ->addIdentifier('price')
            ->addIdentifier('overviewSquareRu')
            ->addIdentifier('overviewSquareEn')
            ->addIdentifier('overviewSquarePl')
            ->addIdentifier('overviewSquareFr')
            ->addIdentifier('square')
            ->addIdentifier('overviewNameRu')
            ->addIdentifier('overviewNameEn')
            ->addIdentifier('overviewNamePl')
            ->addIdentifier('overviewNameFr')
            ->addIdentifier('propertyNameRu')
            ->addIdentifier('propertyNameEn')
            ->addIdentifier('propertyNamePl')
            ->addIdentifier('propertyNameFr')
            ->addIdentifier('overviewPersonRu')
            ->addIdentifier('overviewPersonEn')
            ->addIdentifier('overviewPersonPl')
            ->addIdentifier('overviewPersonFr')
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
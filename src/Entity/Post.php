<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="e_post")
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titleRu", type="string", nullable=true)
     */
    private $titleRu;

    /**
     * @var string
     *
     * @ORM\Column(name="titleEn", type="string", nullable=true)
     */
    private $titleEn;

    /**
     * @var string
     *
     * @ORM\Column(name="titlePl", type="string", nullable=true)
     */
    private $titlePl;

    /**
     * @var string
     *
     * @ORM\Column(name="titleFr", type="string", nullable=true)
     */
    private $titleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewLocationRu", type="text", nullable=true)
     */
    private $overviewLocationRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewLocationEn", type="text", nullable=true)
     */
    private $overviewLocationEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewLocationPl", type="text", nullable=true)
     */
    private $overviewLocationPl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewLocationFr", type="text", nullable=true)
     */
    private $overviewLocationFr;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Location", inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewStatusRu", type="text", nullable=true)
     */
    private $overviewStatusRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewStatusEn", type="text", nullable=true)
     */
    private $overviewStatusEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewStatusPl", type="text", nullable=true)
     */
    private $overviewStatusPl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewStatusFr", type="text", nullable=true)
     */
    private $overviewStatusFr;

    /**
     * @var string
     *
     * @ORM\Column(name="statusRu", type="text", nullable=true)
     */
    private $statusRu;

    /**
     * @var string
     *
     * @ORM\Column(name="statusEn", type="text", nullable=true)
     */
    private $statusEn;

    /**
     * @var string
     *
     * @ORM\Column(name="statusPl", type="text", nullable=true)
     */
    private $statusPl;

    /**
     * @var string
     *
     * @ORM\Column(name="statusFr", type="text", nullable=true)
     */
    private $statusFr;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewTypeRu", type="text", nullable=true)
     */
    private $overviewTypeRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewTypeEn", type="text", nullable=true)
     */
    private $overviewTypeEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewTypePl", type="text", nullable=true)
     */
    private $overviewTypePl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewTypeFr", type="text", nullable=true)
     */
    private $overviewTypeFr;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyTypeRu", type="text", nullable=true)
     */
    private $propertyTypeRu;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyTypeEn", type="text", nullable=true)
     */
    private $propertyTypeEn;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyTypePl", type="text", nullable=true)
     */
    private $propertyTypePl;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyTypeFr", type="text", nullable=true)
     */
    private $propertyTypeFr;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewContractRu", type="text", nullable=true)
     */
    private $overviewContractRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewContractEn", type="text", nullable=true)
     */
    private $overviewContractEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewContractPl", type="text", nullable=true)
     */
    private $overviewContractPl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewContractFr", type="text", nullable=true)
     */
    private $overviewContractFr;

    /**
     * @var string
     *
     * @ORM\Column(name="contractRu", type="text", nullable=true)
     */
    private $contractRu;

    /**
     * @var string
     *
     * @ORM\Column(name="contractEn", type="text", nullable=true)
     */
    private $contractEn;

    /**
     * @var string
     *
     * @ORM\Column(name="contractPl", type="text", nullable=true)
     */
    private $contractPl;

    /**
     * @var string
     *
     * @ORM\Column(name="contractFr", type="text", nullable=true)
     */
    private $contractFr;

    /**
    * @var string
    *
    * @ORM\Column(name="overviewPriceRu", type="text", nullable=true)
    */
    private $overviewPriceRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPriceEn", type="text", nullable=true)
     */
    private $overviewPriceEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPricePl", type="text", nullable=true)
     */
    private $overviewPricePl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPriceFr", type="text", nullable=true)
     */
    private $overviewPriceFr;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewSquareRu", type="text", nullable=true)
     */
    private $overviewSquareRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewSquareEn", type="text", nullable=true)
     */
    private $overviewSquareEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewSquarePl", type="text", nullable=true)
     */
    private $overviewSquarePl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewSquareFr", type="text", nullable=true)
     */
    private $overviewSquareFr;

    /**
     * @var string
     *
     * @ORM\Column(name="square", type="float", nullable=true)
     */
    private $square;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewNameRu", type="text", nullable=true)
     */
    private $overviewNameRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewNameEn", type="text", nullable=true)
     */
    private $overviewNameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewNamePl", type="text", nullable=true)
     */
    private $overviewNamePl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewNameFr", type="text", nullable=true)
     */
    private $overviewNameFr;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyNameRu", type="text", nullable=true)
     */
    private $propertyNameRu;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyNameEn", type="text", nullable=true)
     */
    private $propertyNameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyNamePl", type="text", nullable=true)
     */
    private $propertyNamePl;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyNameFr", type="text", nullable=true)
     */
    private $propertyNameFr;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPersonRu", type="text", nullable=true)
     */
    private $overviewPersonRu;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPersonEn", type="text", nullable=true)
     */
    private $overviewPersonEn;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPersonPl", type="text", nullable=true)
     */
    private $overviewPersonPl;

    /**
     * @var string
     *
     * @ORM\Column(name="overviewPersonFr", type="text", nullable=true)
     */
    private $overviewPersonFr;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPersonRu", type="text", nullable=true)
     */
    private $contactPersonRu;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPersonEn", type="text", nullable=true)
     */
    private $contactPersonEn;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPersonPl", type="text", nullable=true)
     */
    private $contactPersonPl;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPersonFr", type="text", nullable=true)
     */
    private $contactPersonFr;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var string
     * @ORM\Column(name="propertyDescriptionRu", type="text", nullable=true)
     */
    private $propertyDescriptionRu;

    /**
     * @var string
     * @ORM\Column(name="propertyDescriptionEn", type="text", nullable=true)
     */
    private $propertyDescriptionEn;

    /**
     * @var string
     * @ORM\Column(name="propertyDescriptionPl", type="text", nullable=true)
     */
    private $propertyDescriptionPl;

    /**
     * @var string
     * @ORM\Column(name="propertyDescriptionFr", type="text", nullable=true)
     */
    private $propertyDescriptionFr;

    /**
     * @var string
     * @ORM\Column(name="youtubeLink", type="text", nullable=true)
     */
    private $youtubeLink;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance1", type="text", nullable=true)
     */
    private $publicFacilitiesDistance1;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription1Ru", type="text", nullable=true)
     */
    private $publicFacilitiesDescription1Ru;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription1En", type="text", nullable=true)
     */
    private $publicFacilitiesDescription1En;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription1Pl", type="text", nullable=true)
     */
    private $publicFacilitiesDescription1Pl;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription1Fr", type="text", nullable=true)
     */
    private $publicFacilitiesDescription1Fr;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance2", type="text", nullable=true)
     */
    private $publicFacilitiesDistance2;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription2Ru", type="text", nullable=true)
     */
    private $publicFacilitiesDescription2Ru;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription2En", type="text", nullable=true)
     */
    private $publicFacilitiesDescription2En;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription2Pl", type="text", nullable=true)
     */
    private $publicFacilitiesDescription2Pl;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription2Fr", type="text", nullable=true)
     */
    private $publicFacilitiesDescription2Fr;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance3", type="text", nullable=true)
     */
    private $publicFacilitiesDistance3;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription3Ru", type="text", nullable=true)
     */
    private $publicFacilitiesDescription3Ru;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription3En", type="text", nullable=true)
     */
    private $publicFacilitiesDescription3En;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription3Pl", type="text", nullable=true)
     */
    private $publicFacilitiesDescription3Pl;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription3Fr", type="text", nullable=true)
     */
    private $publicFacilitiesDescription3Fr;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance4", type="text", nullable=true)
     */
    private $publicFacilitiesDistance4;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription4Ru", type="text", nullable=true)
     */
    private $publicFacilitiesDescription4Ru;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription4En", type="text", nullable=true)
     */
    private $publicFacilitiesDescription4En;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription4Pl", type="text", nullable=true)
     */
    private $publicFacilitiesDescription4Pl;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription4Fr", type="text", nullable=true)
     */
    private $publicFacilitiesDescription4Fr;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance5", type="text", nullable=true)
     */
    private $publicFacilitiesDistance5;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription5Ru", type="text", nullable=true)
     */
    private $publicFacilitiesDescription5Ru;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription5En", type="text", nullable=true)
     */
    private $publicFacilitiesDescription5En;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription5Pl", type="text", nullable=true)
     */
    private $publicFacilitiesDescription5Pl;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription5Fr", type="text", nullable=true)
     */
    private $publicFacilitiesDescription5Fr;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance6", type="text", nullable=true)
     */
    private $publicFacilitiesDistance6;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription6Ru", type="text", nullable=true)
     */
    private $publicFacilitiesDescription6Ru;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription6En", type="text", nullable=true)
     */
    private $publicFacilitiesDescription6En;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription6Pl", type="text", nullable=true)
     */
    private $publicFacilitiesDescription6Pl;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription6Fr", type="text", nullable=true)
     */
    private $publicFacilitiesDescription6Fr;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ImageAvatar", cascade={"persist"})
     * @ORM\JoinColumn(name="image_avatar_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $imageAvatar;

    /**
     * @return mixed
     */
    public function getImageAvatar()
    {
        return $this->imageAvatar;
    }

    /**
     * @param mixed $imageAvatar
     */
    public function setImageAvatar($imageAvatar)
    {
        $this->imageAvatar = $imageAvatar;
        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PostImages", mappedBy="post", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $postImages;

    public function __construct()
    {
        $this -> postImages = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getPostImages()
    {
        return $this->postImages;
    }

    /**
     * @param mixed $postImages
     */
    public function addPostImage(PostImages $postImage):self {
        if (!$this->postImages->contains($postImage)) {
            $this->postImages->add($postImage);
            $postImage -> setPost($this);

            if ($postImage->getFile()) {
                // update the Image to trigger file management
                $postImage->refreshUpdated();
            }
        }
        return $this;
    }

    public function removePostImage(PostImages $postImages):self {
        if ($this->postImages->contains($postImages)){
            $this->postImages->removeElement($postImages);
            if ($postImages->getPost() === $this) {
                $postImages->setPost(null);
            }
        }
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getTitleRu(): ?string
    {
        return $this->titleRu;
    }

    public function setTitleRu(?string $titleRu): self
    {
        $this->titleRu = $titleRu;

        return $this;
    }

    public function getTitleEn(): ?string
    {
        return $this->titleEn;
    }

    public function setTitleEn(?string $titleEn): self
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    public function getTitlePl(): ?string
    {
        return $this->titlePl;
    }

    public function setTitlePl(?string $titlePl): self
    {
        $this->titlePl = $titlePl;

        return $this;
    }
    public function getTitleFr(): ?string
    {
        return $this->titleFr;
    }

    public function setTitleFr(?string $titleFr): self
    {
        $this->titleFr = $titleFr;

        return $this;
    }

    public function getOverViewLocationRu(): ?string
    {
        return $this->overviewLocationRu;
    }

    public function setOverViewLocationRu(?string $overViewlocationRu): self
    {
        $this->overviewLocationRu = $overViewlocationRu;

        return $this;
    }

    public function getOverViewLocationEn(): ?string
    {
        return $this->overviewLocationEn;
    }

    public function setOverViewLocationEn(?string $overViewlocationEn): self
    {
        $this->overviewLocationEn = $overViewlocationEn;

        return $this;
    }

    public function getOverViewLocationPl(): ?string
    {
        return $this->overviewLocationPl;
    }

    public function setOverViewLocationPl(?string $overViewlocationPl): self
    {
        $this->overviewLocationPl = $overViewlocationPl;

        return $this;
    }

    public function getOverViewLocationFr(): ?string
    {
        return $this->overviewLocationFr;
    }

    public function setOverViewLocationFr(?string $overViewlocationFr): self
    {
        $this->overviewLocationFr = $overViewlocationFr;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getOverviewStatusRu(): ?string
    {
        return $this->overviewStatusRu;
    }

    public function setOverviewStatusRu(?string $overviewStatusRu): self
    {
        $this->overviewStatusRu = $overviewStatusRu;

        return $this;
    }

    public function getOverviewStatusEn(): ?string
    {
        return $this->overviewStatusEn;
    }

    public function setOverviewStatusEn(?string $overviewStatusEn): self
    {
        $this->overviewStatusEn = $overviewStatusEn;

        return $this;
    }

    public function getOverviewStatusPl(): ?string
    {
        return $this->overviewStatusPl;
    }

    public function setOverviewStatusPl(?string $overviewStatusPl): self
    {
        $this->overviewStatusPl = $overviewStatusPl;

        return $this;
    }

    public function getOverviewStatusFr(): ?string
    {
        return $this->overviewStatusFr;
    }

    public function setOverviewStatusFr(?string $overviewStatusFr): self
    {
        $this->overviewStatusFr = $overviewStatusFr;

        return $this;
    }

    public function getStatusRu(): ?string
    {
        return $this->statusRu;
    }

    public function setStatusRu(?string $statusRu): self
    {
        $this->statusRu = $statusRu;

        return $this;
    }

    public function getStatusEn(): ?string
    {
        return $this->statusEn;
    }

    public function setStatusEn(?string $statusEn): self
    {
        $this->statusEn = $statusEn;

        return $this;
    }

    public function getStatusPl(): ?string
    {
        return $this->statusPl;
    }

    public function setStatusPl(?string $statusPl): self
    {
        $this->statusPl = $statusPl;

        return $this;
    }

    public function getStatusFr(): ?string
    {
        return $this->statusFr;
    }

    public function setStatusFr(?string $statusFr): self
    {
        $this->statusFr = $statusFr;

        return $this;
    }

    public function getOverviewTypeRu(): ?string
    {
        return $this->overviewTypeRu;
    }

    public function setOverviewTypeRu(?string $overviewTypeRu): self
    {
        $this->overviewTypeRu = $overviewTypeRu;

        return $this;
    }

    public function getOverviewTypeEn(): ?string
    {
        return $this->overviewTypeEn;
    }

    public function setOverviewTypeEn(?string $overviewTypeEn): self
    {
        $this->overviewTypeEn = $overviewTypeEn;

        return $this;
    }

    public function getOverviewTypePl(): ?string
    {
        return $this->overviewTypePl;
    }

    public function setOverviewTypePl(?string $overviewTypePl): self
    {
        $this->overviewTypePl = $overviewTypePl;

        return $this;
    }

    public function getOverviewTypeFr(): ?string
    {
        return $this->overviewTypeFr;
    }

    public function setOverviewTypeFr(?string $overviewTypeFr): self
    {
        $this->overviewTypeFr = $overviewTypeFr;

        return $this;
    }

    public function getPropertyTypeRu(): ?string
    {
        return $this->propertyTypeRu;
    }

    public function setPropertyTypeRu(?string $propertyTypeRu): self
    {
        $this->propertyTypeRu = $propertyTypeRu;

        return $this;
    }

    public function getPropertyTypeEn(): ?string
    {
        return $this->propertyTypeEn;
    }

    public function setPropertyTypeEn(?string $propertyTypeEn): self
    {
        $this->propertyTypeEn = $propertyTypeEn;

        return $this;
    }

    public function getPropertyTypePl(): ?string
    {
        return $this->propertyTypePl;
    }

    public function setPropertyTypePl(?string $propertyTypePl): self
    {
        $this->propertyTypePl = $propertyTypePl;

        return $this;
    }

    public function getPropertyTypeFr(): ?string
    {
        return $this->propertyTypeFr;
    }

    public function setPropertyTypeFr(?string $propertyTypeFr): self
    {
        $this->propertyTypeFr = $propertyTypeFr;

        return $this;
    }

    public function getOverviewContractRu(): ?string
    {
        return $this->overviewContractRu;
    }

    public function setOverviewContractRu(?string $overviewContractRu): self
    {
        $this->overviewContractRu = $overviewContractRu;

        return $this;
    }

    public function getOverviewContractEn(): ?string
    {
        return $this->overviewContractEn;
    }

    public function setOverviewContractEn(?string $overviewContractEn): self
    {
        $this->overviewContractEn = $overviewContractEn;

        return $this;
    }

    public function getOverviewContractPl(): ?string
    {
        return $this->overviewContractPl;
    }

    public function setOverviewContractPl(?string $overviewContractPl): self
    {
        $this->overviewContractPl = $overviewContractPl;

        return $this;
    }

    public function getOverviewContractFr(): ?string
    {
        return $this->overviewContractFr;
    }

    public function setOverviewContractFr(?string $overviewContractFr): self
    {
        $this->overviewContractFr = $overviewContractFr;

        return $this;
    }

    public function getContractRu(): ?string
    {
        return $this->contractRu;
    }

    public function setContractRu(?string $contractRu): self
    {
        $this->contractRu = $contractRu;

        return $this;
    }

    public function getContractEn(): ?string
    {
        return $this->contractEn;
    }

    public function setContractEn(?string $contractEn): self
    {
        $this->contractEn = $contractEn;

        return $this;
    }

    public function getContractPl(): ?string
    {
        return $this->contractPl;
    }

    public function setContractPl(?string $contractPl): self
    {
        $this->contractPl = $contractPl;

        return $this;
    }

    public function getContractFr(): ?string
    {
        return $this->contractFr;
    }

    public function setContractFr(?string $contractFr): self
    {
        $this->contractFr = $contractFr;

        return $this;
    }

    public function getOverviewPriceRu(): ?string
    {
        return $this->overviewPriceRu;
    }

    public function setOverviewPriceRu(?string $overviewPriceRu): self
    {
        $this->overviewPriceRu = $overviewPriceRu;

        return $this;
    }

    public function getOverviewPriceEn(): ?string
    {
        return $this->overviewPriceEn;
    }

    public function setOverviewPriceEn(?string $overviewPriceEn): self
    {
        $this->overviewPriceEn = $overviewPriceEn;

        return $this;
    }

    public function getOverviewPricePl(): ?string
    {
        return $this->overviewPricePl;
    }

    public function setOverviewPricePl(?string $overviewPricePl): self
    {
        $this->overviewPricePl = $overviewPricePl;

        return $this;
    }

    public function getOverviewPriceFr(): ?string
    {
        return $this->overviewPriceFr;
    }

    public function setOverviewPriceFr(?string $overviewPriceFr): self
    {
        $this->overviewPriceFr = $overviewPriceFr;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getOverviewSquareRu(): ?string
    {
        return $this->overviewSquareRu;
    }

    public function setOverviewSquareRu(?string $overviewSquareRu): self
    {
        $this->overviewSquareRu = $overviewSquareRu;

        return $this;
    }

    public function getOverviewSquareEn(): ?string
    {
        return $this->overviewSquareEn;
    }

    public function setOverviewSquareEn(?string $overviewSquareEn): self
    {
        $this->overviewSquareEn = $overviewSquareEn;

        return $this;
    }

    public function getOverviewSquarePl(): ?string
    {
        return $this->overviewSquarePl;
    }

    public function setOverviewSquarePl(?string $overviewSquarePl): self
    {
        $this->overviewSquarePl = $overviewSquarePl;

        return $this;
    }

    public function getOverviewSquareFr(): ?string
    {
        return $this->overviewSquareFr;
    }

    public function setOverviewSquareFr(?string $overviewSquareFr): self
    {
        $this->overviewSquareFr = $overviewSquareFr;

        return $this;
    }

    public function getSquare(): ?float
    {
        return $this->square;
    }

    public function setSquare(?float $square): self
    {
        $this->square = $square;

        return $this;
    }

    public function getOverviewNameRu(): ?string
    {
        return $this->overviewNameRu;
    }

    public function setOverviewNameRu(?string $overviewNameRu): self
    {
        $this->overviewNameRu = $overviewNameRu;

        return $this;
    }

    public function getOverviewNameEn(): ?string
    {
        return $this->overviewNameEn;
    }

    public function setOverviewNameEn(?string $overviewNameEn): self
    {
        $this->overviewNameEn = $overviewNameEn;

        return $this;
    }

    public function getOverviewNamePl(): ?string
    {
        return $this->overviewNamePl;
    }

    public function setOverviewNamePl(?string $overviewNamePl): self
    {
        $this->overviewNamePl = $overviewNamePl;

        return $this;
    }

    public function getOverviewNameFr(): ?string
    {
        return $this->overviewNameFr;
    }

    public function setOverviewNameFr(?string $overviewNameFr): self
    {
        $this->overviewNameFr = $overviewNameFr;

        return $this;
    }

    public function getPropertyNameRu(): ?string
    {
        return $this->propertyNameRu;
    }

    public function setPropertyNameRu(?string $propertyNameRu): self
    {
        $this->propertyNameRu = $propertyNameRu;

        return $this;
    }

    public function getPropertyNameEn(): ?string
    {
        return $this->propertyNameEn;
    }

    public function setPropertyNameEn(?string $propertyNameEn): self
    {
        $this->propertyNameEn = $propertyNameEn;

        return $this;
    }

    public function getPropertyNamePl(): ?string
    {
        return $this->propertyNamePl;
    }

    public function setPropertyNamePl(?string $propertyNamePl): self
    {
        $this->propertyNamePl = $propertyNamePl;

        return $this;
    }

    public function getPropertyNameFr(): ?string
    {
        return $this->propertyNameFr;
    }

    public function setPropertyNameFr(?string $propertyNameFr): self
    {
        $this->propertyNameFr = $propertyNameFr;

        return $this;
    }

    public function getOverviewPersonRu(): ?string
    {
        return $this->overviewPersonRu;
    }

    public function setOverviewPersonRu(?string $overviewPersonRu): self
    {
        $this->overviewPersonRu = $overviewPersonRu;

        return $this;
    }

    public function getOverviewPersonEn(): ?string
    {
        return $this->overviewPersonEn;
    }

    public function setOverviewPersonEn(?string $overviewPersonEn): self
    {
        $this->overviewPersonEn = $overviewPersonEn;

        return $this;
    }

    public function getOverviewPersonPl(): ?string
    {
        return $this->overviewPersonPl;
    }

    public function setOverviewPersonPl(?string $overviewPersonPl): self
    {
        $this->overviewPersonPl = $overviewPersonPl;

        return $this;
    }

    public function getOverviewPersonFr(): ?string
    {
        return $this->overviewPersonFr;
    }

    public function setOverviewPersonFr(?string $overviewPersonFr): self
    {
        $this->overviewPersonFr = $overviewPersonFr;

        return $this;
    }

    public function getContactPersonRu(): ?string
    {
        return $this->contactPersonRu;
    }

    public function setContactPersonRu(?string $contactPersonRu): self
    {
        $this->contactPersonRu = $contactPersonRu;

        return $this;
    }

    public function getContactPersonEn(): ?string
    {
        return $this->contactPersonEn;
    }

    public function setContactPersonEn(?string $contactPersonEn): self
    {
        $this->contactPersonEn = $contactPersonEn;

        return $this;
    }

    public function getContactPersonPl(): ?string
    {
        return $this->contactPersonPl;
    }

    public function setContactPersonPl(?string $contactPersonPl): self
    {
        $this->contactPersonPl = $contactPersonPl;

        return $this;
    }

    public function getContactPersonFr(): ?string
    {
        return $this->contactPersonFr;
    }

    public function setContactPersonFr(?string $contactPersonFr): self
    {
        $this->contactPersonFr = $contactPersonFr;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPropertyDescriptionRu(): ?string
    {
        return $this->propertyDescriptionRu;
    }

    public function setPropertyDescriptionRu(?string $propertyDescriptionRu): self
    {
        $this->propertyDescriptionRu = $propertyDescriptionRu;

        return $this;
    }

    public function getPropertyDescriptionEn(): ?string
    {
        return $this->propertyDescriptionEn;
    }

    public function setPropertyDescriptionEn(?string $propertyDescriptionEn): self
    {
        $this->propertyDescriptionEn = $propertyDescriptionEn;

        return $this;
    }

    public function getPropertyDescriptionPl(): ?string
    {
        return $this->propertyDescriptionPl;
    }

    public function setPropertyDescriptionPl(?string $propertyDescriptionPl): self
    {
        $this->propertyDescriptionPl = $propertyDescriptionPl;

        return $this;
    }

    public function getPropertyDescriptionFr(): ?string
    {
        return $this->propertyDescriptionFr;
    }

    public function setPropertyDescriptionFr(?string $propertyDescriptionFr): self
    {
        $this->propertyDescriptionFr = $propertyDescriptionFr;

        return $this;
    }

    public function getYoutubeLink(): ?string
    {
        return $this->youtubeLink;
    }

    public function setYoutubeLink(?string $youtubeLink): self
    {
        $this->youtubeLink = $youtubeLink;

        return $this;
    }

    public function getPublicFacilitiesDistance1(): ?string
    {
        return $this->publicFacilitiesDistance1;
    }

    public function setPublicFacilitiesDistance1(?string $publicFacilitiesDistance1): self
    {
        $this->publicFacilitiesDistance1 = $publicFacilitiesDistance1;

        return $this;
    }

    public function getPublicFacilitiesDescription1Ru(): ?string
    {
        return $this->publicFacilitiesDescription1Ru;
    }

    public function setPublicFacilitiesDescription1Ru(?string $publicFacilitiesDescription1Ru): self
    {
        $this->publicFacilitiesDescription1Ru = $publicFacilitiesDescription1Ru;

        return $this;
    }

    public function getPublicFacilitiesDescription1En(): ?string
    {
        return $this->publicFacilitiesDescription1En;
    }

    public function setPublicFacilitiesDescription1En(?string $publicFacilitiesDescription1En): self
    {
        $this->publicFacilitiesDescription1En = $publicFacilitiesDescription1En;

        return $this;
    }

    public function getPublicFacilitiesDescription1Pl(): ?string
    {
        return $this->publicFacilitiesDescription1Pl;
    }

    public function setPublicFacilitiesDescription1Pl(?string $publicFacilitiesDescription1Pl): self
    {
        $this->publicFacilitiesDescription1Pl = $publicFacilitiesDescription1Pl;

        return $this;
    }

    public function getPublicFacilitiesDescription1Fr(): ?string
    {
        return $this->publicFacilitiesDescription1Fr;
    }

    public function setPublicFacilitiesDescription1Fr(?string $publicFacilitiesDescription1Fr): self
    {
        $this->publicFacilitiesDescription1Fr = $publicFacilitiesDescription1Fr;

        return $this;
    }

    public function getPublicFacilitiesDistance2(): ?string
    {
        return $this->publicFacilitiesDistance2;
    }

    public function setPublicFacilitiesDistance2(?string $publicFacilitiesDistance2): self
    {
        $this->publicFacilitiesDistance2 = $publicFacilitiesDistance2;

        return $this;
    }

    public function getPublicFacilitiesDescription2Ru(): ?string
    {
        return $this->publicFacilitiesDescription2Ru;
    }

    public function setPublicFacilitiesDescription2Ru(?string $publicFacilitiesDescription2Ru): self
    {
        $this->publicFacilitiesDescription2Ru = $publicFacilitiesDescription2Ru;

        return $this;
    }

    public function getPublicFacilitiesDescription2En(): ?string
    {
        return $this->publicFacilitiesDescription2En;
    }

    public function setPublicFacilitiesDescription2En(?string $publicFacilitiesDescription2En): self
    {
        $this->publicFacilitiesDescription2En = $publicFacilitiesDescription2En;

        return $this;
    }

    public function getPublicFacilitiesDescription2Pl(): ?string
    {
        return $this->publicFacilitiesDescription2Pl;
    }

    public function setPublicFacilitiesDescription2Pl(?string $publicFacilitiesDescription2Pl): self
    {
        $this->publicFacilitiesDescription2Pl = $publicFacilitiesDescription2Pl;

        return $this;
    }

    public function getPublicFacilitiesDescription2Fr(): ?string
    {
        return $this->publicFacilitiesDescription2Fr;
    }

    public function setPublicFacilitiesDescription2Fr(?string $publicFacilitiesDescription2Fr): self
    {
        $this->publicFacilitiesDescription2Fr = $publicFacilitiesDescription2Fr;

        return $this;
    }

    public function getPublicFacilitiesDistance3(): ?string
    {
        return $this->publicFacilitiesDistance3;
    }

    public function setPublicFacilitiesDistance3(?string $publicFacilitiesDistance3): self
    {
        $this->publicFacilitiesDistance3 = $publicFacilitiesDistance3;

        return $this;
    }

    public function getPublicFacilitiesDescription3Ru(): ?string
    {
        return $this->publicFacilitiesDescription3Ru;
    }

    public function setPublicFacilitiesDescription3Ru(?string $publicFacilitiesDescription3Ru): self
    {
        $this->publicFacilitiesDescription3Ru = $publicFacilitiesDescription3Ru;

        return $this;
    }

    public function getPublicFacilitiesDescription3En(): ?string
    {
        return $this->publicFacilitiesDescription3En;
    }

    public function setPublicFacilitiesDescription3En(?string $publicFacilitiesDescription3En): self
    {
        $this->publicFacilitiesDescription3En = $publicFacilitiesDescription3En;

        return $this;
    }

    public function getPublicFacilitiesDescription3Pl(): ?string
    {
        return $this->publicFacilitiesDescription3Pl;
    }

    public function setPublicFacilitiesDescription3Pl(?string $publicFacilitiesDescription3Pl): self
    {
        $this->publicFacilitiesDescription3Pl = $publicFacilitiesDescription3Pl;

        return $this;
    }

    public function getPublicFacilitiesDescription3Fr(): ?string
    {
        return $this->publicFacilitiesDescription3Fr;
    }

    public function setPublicFacilitiesDescription3Fr(?string $publicFacilitiesDescription3Fr): self
    {
        $this->publicFacilitiesDescription3Fr = $publicFacilitiesDescription3Fr;

        return $this;
    }

    public function getPublicFacilitiesDistance4(): ?string
    {
        return $this->publicFacilitiesDistance4;
    }

    public function setPublicFacilitiesDistance4(?string $publicFacilitiesDistance4): self
    {
        $this->publicFacilitiesDistance4 = $publicFacilitiesDistance4;

        return $this;
    }

    public function getPublicFacilitiesDescription4Ru(): ?string
    {
        return $this->publicFacilitiesDescription4Ru;
    }

    public function setPublicFacilitiesDescription4Ru(?string $publicFacilitiesDescription4Ru): self
    {
        $this->publicFacilitiesDescription4Ru = $publicFacilitiesDescription4Ru;

        return $this;
    }

    public function getPublicFacilitiesDescription4En(): ?string
    {
        return $this->publicFacilitiesDescription4En;
    }

    public function setPublicFacilitiesDescription4En(?string $publicFacilitiesDescription4En): self
    {
        $this->publicFacilitiesDescription4En = $publicFacilitiesDescription4En;

        return $this;
    }

    public function getPublicFacilitiesDescription4Pl(): ?string
    {
        return $this->publicFacilitiesDescription4Pl;
    }

    public function setPublicFacilitiesDescription4Pl(?string $publicFacilitiesDescription4Pl): self
    {
        $this->publicFacilitiesDescription4Pl = $publicFacilitiesDescription4Pl;

        return $this;
    }

    public function getPublicFacilitiesDescription4Fr(): ?string
    {
        return $this->publicFacilitiesDescription4Fr;
    }

    public function setPublicFacilitiesDescription4Fr(?string $publicFacilitiesDescription4Fr): self
    {
        $this->publicFacilitiesDescription4Fr = $publicFacilitiesDescription4Fr;

        return $this;
    }

    public function getPublicFacilitiesDistance5(): ?string
    {
        return $this->publicFacilitiesDistance5;
    }

    public function setPublicFacilitiesDistance5(?string $publicFacilitiesDistance5): self
    {
        $this->publicFacilitiesDistance5 = $publicFacilitiesDistance5;

        return $this;
    }

    public function getPublicFacilitiesDescription5Ru(): ?string
    {
        return $this->publicFacilitiesDescription5Ru;
    }

    public function setPublicFacilitiesDescription5Ru(?string $publicFacilitiesDescription5Ru): self
    {
        $this->publicFacilitiesDescription5Ru = $publicFacilitiesDescription5Ru;

        return $this;
    }

    public function getPublicFacilitiesDescription5En(): ?string
    {
        return $this->publicFacilitiesDescription5En;
    }

    public function setPublicFacilitiesDescription5En(?string $publicFacilitiesDescription5En): self
    {
        $this->publicFacilitiesDescription5En = $publicFacilitiesDescription5En;

        return $this;
    }

    public function getPublicFacilitiesDescription5Pl(): ?string
    {
        return $this->publicFacilitiesDescription5Pl;
    }

    public function setPublicFacilitiesDescription5Pl(?string $publicFacilitiesDescription5Pl): self
    {
        $this->publicFacilitiesDescription5Pl = $publicFacilitiesDescription5Pl;

        return $this;
    }

    public function getPublicFacilitiesDescription5Fr(): ?string
    {
        return $this->publicFacilitiesDescription5Fr;
    }

    public function setPublicFacilitiesDescription5Fr(?string $publicFacilitiesDescription5Fr): self
    {
        $this->publicFacilitiesDescription5Fr = $publicFacilitiesDescription5Fr;

        return $this;
    }

    public function getPublicFacilitiesDistance6(): ?string
    {
        return $this->publicFacilitiesDistance6;
    }

    public function setPublicFacilitiesDistance6(?string $publicFacilitiesDistance6): self
    {
        $this->publicFacilitiesDistance6 = $publicFacilitiesDistance6;

        return $this;
    }

    public function getPublicFacilitiesDescription6Ru(): ?string
    {
        return $this->publicFacilitiesDescription6Ru;
    }

    public function setPublicFacilitiesDescription6Ru(?string $publicFacilitiesDescription6Ru): self
    {
        $this->publicFacilitiesDescription6Ru = $publicFacilitiesDescription6Ru;

        return $this;
    }

    public function getPublicFacilitiesDescription6En(): ?string
    {
        return $this->publicFacilitiesDescription6En;
    }

    public function setPublicFacilitiesDescription6En(?string $publicFacilitiesDescription6En): self
    {
        $this->publicFacilitiesDescription6En = $publicFacilitiesDescription6En;

        return $this;
    }

    public function getPublicFacilitiesDescription6Pl(): ?string
    {
        return $this->publicFacilitiesDescription6Pl;
    }

    public function setPublicFacilitiesDescription6Pl(?string $publicFacilitiesDescription6Pl): self
    {
        $this->publicFacilitiesDescription6Pl = $publicFacilitiesDescription6Pl;

        return $this;
    }

    public function getPublicFacilitiesDescription6Fr(): ?string
    {
        return $this->publicFacilitiesDescription6Fr;
    }

    public function setPublicFacilitiesDescription6Fr(?string $publicFacilitiesDescription6Fr): self
    {
        $this->publicFacilitiesDescription6Fr = $publicFacilitiesDescription6Fr;

        return $this;
    }
}

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
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text")
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyType", type="text")
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="contract", type="text")
     */
    private $contract;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="text")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="square", type="text")
     */
    private $square;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyName", type="text")
     */
    private $propertyName;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPerson", type="text")
     */
    private $contactPerson;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var string
     * @ORM\Column(name="propertyDescription", type="text")
     */
    private $propertyDescription;

    /**
     * @var string
     * @ORM\Column(name="youtubeLink", type="text")
     */
    private $youtubeLink;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance1", type="text")
     */
    private $publicFacilitiesDistance1;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription1", type="text")
     */
    private $publicFacilitiesDescription1;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance2", type="text")
     */
    private $publicFacilitiesDistance2;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription2", type="text")
     */
    private $publicFacilitiesDescription2;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance3", type="text")
     */
    private $publicFacilitiesDistance3;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription3", type="text")
     */
    private $publicFacilitiesDescription3;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance4", type="text")
     */
    private $publicFacilitiesDistance4;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription4", type="text")
     */
    private $publicFacilitiesDescription4;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance5", type="text")
     */
    private $publicFacilitiesDistance5;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription5", type="text")
     */
    private $publicFacilitiesDescription5;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDistance6", type="text")
     */
    private $publicFacilitiesDistance6;

    /**
     * @var string
     * @ORM\Column(name="publicFacilitiesDescription6", type="text")
     */
    private $publicFacilitiesDescription6;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ImageAvatar", cascade={"persist"})
     * @ORM\JoinColumn(name="image_avatar_id", referencedColumnName="id")
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


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPropertyType(): ?string
    {
        return $this->propertyType;
    }

    public function setPropertyType(?string $propertyType): self
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(?string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSquare(): ?string
    {
        return $this->square;
    }

    public function setSquare(?string $square): self
    {
        $this->square = $square;

        return $this;
    }

    public function getPropertyName(): ?string
    {
        return $this->propertyName;
    }

    public function setPropertyName(?string $propertyName): self
    {
        $this->propertyName = $propertyName;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): self
    {
        $this->contactPerson = $contactPerson;

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

    public function getPropertyDescription(): ?string
    {
        return $this->propertyDescription;
    }

    public function setPropertyDescription(?string $propertyDescription): self
    {
        $this->propertyDescription = $propertyDescription;

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

    public function getPublicFacilitiesDescription1(): ?string
    {
        return $this->publicFacilitiesDescription1;
    }

    public function setPublicFacilitiesDescription1(?string $publicFacilitiesDescription1): self
    {
        $this->publicFacilitiesDescription1 = $publicFacilitiesDescription1;

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

    public function getPublicFacilitiesDescription2(): ?string
    {
        return $this->publicFacilitiesDescription2;
    }

    public function setPublicFacilitiesDescription2(?string $publicFacilitiesDescription2): self
    {
        $this->publicFacilitiesDescription2 = $publicFacilitiesDescription2;

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

    public function getPublicFacilitiesDescription3(): ?string
    {
        return $this->publicFacilitiesDescription3;
    }

    public function setPublicFacilitiesDescription3(?string $publicFacilitiesDescription3): self
    {
        $this->publicFacilitiesDescription3 = $publicFacilitiesDescription3;

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

    public function getPublicFacilitiesDescription4(): ?string
    {
        return $this->publicFacilitiesDescription4;
    }

    public function setPublicFacilitiesDescription4(?string $publicFacilitiesDescription4): self
    {
        $this->publicFacilitiesDescription4 = $publicFacilitiesDescription4;

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

    public function getPublicFacilitiesDescription5(): ?string
    {
        return $this->publicFacilitiesDescription5;
    }

    public function setPublicFacilitiesDescription5(?string $publicFacilitiesDescription5): self
    {
        $this->publicFacilitiesDescription5 = $publicFacilitiesDescription5;

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

    public function getPublicFacilitiesDescription6(): ?string
    {
        return $this->publicFacilitiesDescription6;
    }

    public function setPublicFacilitiesDescription6(?string $publicFacilitiesDescription6): self
    {
        $this->publicFacilitiesDescription6 = $publicFacilitiesDescription6;

        return $this;
    }
}

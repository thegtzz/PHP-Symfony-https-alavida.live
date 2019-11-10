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
     *
     * @ORM\Column(name="propertyDescription", type="text")
     */
    private $propertyDescription;

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
}

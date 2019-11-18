<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="e_customer_review")
 * @ORM\Entity(repositoryClass="App\Repository\CustomerReviewRepository")
 */
class CustomerReview
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
     * @ORM\OneToOne(targetEntity="App\Entity\CustomerAvatar", cascade={"persist"})
     * @ORM\JoinColumn(name="customer_avatar_id", referencedColumnName="id")
     */
    private $customerAvatar;

    /**
     * @var string
     * @ORM\Column(name="customerShortReviewRu", type="text", nullable=true)
     */
    private $customerShortReviewRu;

    /**
     * @var string
     * @ORM\Column(name="customerShortReviewEn", type="text", nullable=true)
     */
    private $customerShortReviewEn;

    /**
     * @var string
     * @ORM\Column(name="customerShortReviewPl", type="text", nullable=true)
     */
    private $customerShortReviewPl;

    /**
     * @var string
     * @ORM\Column(name="customerShortReviewFr", type="text", nullable=true)
     */
    private $customerShortReviewFr;

    /**
     * @var string
     * @ORM\Column(name="customerMainReviewRu", type="text", nullable=true)
     */
    private $customerMainReviewRu;

    /**
     * @var string
     * @ORM\Column(name="customerMainReviewEn", type="text", nullable=true)
     */
    private $customerMainReviewEn;

    /**
     * @var string
     * @ORM\Column(name="customerMainReviewPl", type="text", nullable=true)
     */
    private $customerMainReviewPl;

    /**
     * @var string
     * @ORM\Column(name="customerMainReviewFr", type="text", nullable=true)
     */
    private $customerMainReviewFr;

    /**
     * @var string
     * @ORM\Column(name="customerName", type="text", nullable=true)
     */
    private $customerName;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCustomerAvatar()
    {
        return $this->customerAvatar;
    }

    /**
     * @param mixed $customerAvatar
     */
    public function setCustomerAvatar($customerAvatar)
    {
        $this->customerAvatar = $customerAvatar;
        return $this;
    }

    public function getCustomerSHortReviewRu(): ?string
{
    return $this->customerShortReviewRu;
}

    public function setCustomerShortReviewRu(?string $customerShortReviewRu): self
    {
        $this->customerShortReviewRu = $customerShortReviewRu;

        return $this;
    }

    public function getCustomerSHortReviewEn(): ?string
    {
        return $this->customerShortReviewEn;
    }

    public function setCustomerShortReviewEn(?string $customerShortReviewEn): self
    {
        $this->customerShortReviewEn = $customerShortReviewEn;

        return $this;
    }

    public function getCustomerSHortReviewPl(): ?string
    {
        return $this->customerShortReviewPl;
    }

    public function setCustomerShortReviewPl(?string $customerShortReviewPl): self
    {
        $this->customerShortReviewPl = $customerShortReviewPl;

        return $this;
    }

    public function getCustomerSHortReviewFr(): ?string
    {
        return $this->customerShortReviewFr;
    }

    public function setCustomerShortReviewFr(?string $customerShortReviewFr): self
    {
        $this->customerShortReviewFr = $customerShortReviewFr;

        return $this;
    }

    public function getCustomerMainReviewRu(): ?string
    {
        return $this->customerMainReviewRu;
    }

    public function setCustomerMainReviewRu(?string $customerMainReviewRu): self
    {
        $this->customerMainReviewRu = $customerMainReviewRu;

        return $this;
    }

    public function getCustomerMainReviewEn(): ?string
    {
        return $this->customerMainReviewEn;
    }

    public function setCustomerMainReviewEn(?string $customerMainReviewEn): self
    {
        $this->customerMainReviewEn = $customerMainReviewEn;

        return $this;
    }

    public function getCustomerMainReviewPl(): ?string
    {
        return $this->customerMainReviewPl;
    }

    public function setCustomerMainReviewPl(?string $customerMainReviewPl): self
    {
        $this->customerMainReviewPl = $customerMainReviewPl;

        return $this;
    }

    public function getCustomerMainReviewFr(): ?string
    {
        return $this->customerMainReviewFr;
    }

    public function setCustomerMainReviewFr(?string $customerMainReviewFr): self
    {
        $this->customerMainReviewFr = $customerMainReviewFr;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;

        return $this;
    }
}
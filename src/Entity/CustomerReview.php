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
     * @ORM\Column(name="customerShortReview", type="text", nullable=true)
     */
    private $customerShortReview;

    /**
     * @var string
     * @ORM\Column(name="customerMainReview", type="text", nullable=true)
     */
    private $customerMainReview;

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

    public function getCustomerSHortReview(): ?string
    {
        return $this->customerShortReview;
    }

    public function setCustomerShortReview(?string $customerShortReview): self
    {
        $this->customerShortReview = $customerShortReview;

        return $this;
    }

    public function getCustomerMainReview(): ?string
    {
        return $this->customerMainReview;
    }

    public function setCustomerMainReview(?string $customerMainReview): self
    {
        $this->customerMainReview = $customerMainReview;

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
<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="e_contact_info")
 * @ORM\Entity(repositoryClass="App\Repository\ContactInformationRepository")
 */
class ContactInformation
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
     * @ORM\Column(name="email", type="text")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="phoneNumber1", type="text")
     */
    private $phoneNumber1;

    /**
     * @var string
     * @ORM\Column(name="phoneNumber2", type="text")
     */
    private $phoneNumber2;

    /**
     * @var string
     * @ORM\Column(name="phoneNumber3", type="text")
     */
    private $phoneNumber3;

    /**
     * @var string
     * @ORM\Column(name="socialMedia1", type="text")
     */
    private $socialMedia1;

    /**
     * @var string
     * @ORM\Column(name="socialMedia2", type="text")
     */
    private $socialMedia2;

    /**
     * @var string
     * @ORM\Column(name="socialMedia3", type="text")
     */
    private $socialMedia3;

    /**
     * @var string
     * @ORM\Column(name="socialMedia4", type="text")
     */
    private $socialMedia4;

    /**
     * @var string
     * @ORM\Column(name="socialMedia5", type="text")
     */
    private $socialMedia5;

    /**
     * @var string
     * @ORM\Column(name="address", type="text")
     */
    private $address;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber1(): ?string
    {
        return $this->phoneNumber1;
    }

    public function setPhoneNumber1(?string $phoneNumber1): self
    {
        $this->phoneNumber1 = $phoneNumber1;

        return $this;
    }

    public function getPhoneNumber2(): ?string
    {
        return $this->phoneNumber2;
    }

    public function setPhoneNumber2(?string $phoneNumber2): self
    {
        $this->phoneNumber2 = $phoneNumber2;

        return $this;
    }

    public function getPhoneNumber3(): ?string
    {
        return $this->phoneNumber3;
    }

    public function setPhoneNumber3(?string $phoneNumber3): self
    {
        $this->phoneNumber3 = $phoneNumber3;

        return $this;
    }

    public function getSocialMedia1(): ?string
    {
        return $this->socialMedia1;
    }

    public function setSocialMedia1(?string $socialMedia1): self
    {
        $this->socialMedia1 = $socialMedia1;

        return $this;
    }

    public function getSocialMedia2(): ?string
    {
        return $this->socialMedia2;
    }

    public function setSocialMedia2(?string $socialMedia2): self
    {
        $this->socialMedia2 = $socialMedia2;

        return $this;
    }

    public function getSocialMedia3(): ?string
    {
        return $this->socialMedia3;
    }

    public function setSocialMedia3(?string $socialMedia3): self
    {
        $this->socialMedia3 = $socialMedia3;

        return $this;
    }

    public function getSocialMedia4(): ?string
    {
        return $this->socialMedia4;
    }

    public function setSocialMedia4(?string $socialMedia4): self
    {
        $this->socialMedia4 = $socialMedia4;

        return $this;
    }

    public function getSocialMedia5(): ?string
    {
        return $this->socialMedia5;
    }

    public function setSocialMedia5(?string $socialMedia5): self
    {
        $this->socialMedia5 = $socialMedia5;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
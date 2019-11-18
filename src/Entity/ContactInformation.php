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
     * @ORM\Column(name="email", type="text", nullable=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="phoneNumber1", type="text", nullable=true)
     */
    private $phoneNumber1;

    /**
     * @var string
     * @ORM\Column(name="phoneNumber2", type="text", nullable=true)
     */
    private $phoneNumber2;

    /**
     * @var string
     * @ORM\Column(name="phoneNumber3", type="text", nullable=true)
     */
    private $phoneNumber3;

    /**
     * @var string
     * @ORM\Column(name="facebook", type="text", nullable=true)
     */
    private $facebook;

    /**
     * @var string
     * @ORM\Column(name="instagram", type="text", nullable=true)
     */
    private $instagram;

    /**
     * @var string
     * @ORM\Column(name="linkedin", type="text", nullable=true)
     */
    private $linkedin;

    /**
     * @var string
     * @ORM\Column(name="address", type="text", nullable=true)
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

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(?string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(?string $linkedin): self
    {
        $this->linkedin = $linkedin;

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
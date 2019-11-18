<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="e_staff_info")
 * @ORM\Entity(repositoryClass="App\Repository\StaffRepository")
 */
class Staff
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
     * @ORM\OneToOne(targetEntity="App\Entity\StaffAvatar", cascade={"persist"})
     * @ORM\JoinColumn(name="staff_avatar_id", referencedColumnName="id")
     */
    private $staffAvatar;

    /**
     * @var string
     * @ORM\Column(name="staffNameRu", type="text", nullable=true)
     */
    private $staffNameRu;

    /**
     * @var string
     * @ORM\Column(name="staffNameEn", type="text", nullable=true)
     */
    private $staffNameEn;

    /**
     * @var string
     * @ORM\Column(name="staffNamePl", type="text", nullable=true)
     */
    private $staffNamePl;

    /**
     * @var string
     * @ORM\Column(name="staffNameFr", type="text", nullable=true)
     */
    private $staffNameFr;

    /**
     * @var string
     * @ORM\Column(name="staffPositionRu", type="text", nullable=true)
     */
    private $staffPositionRu;

    /**
     * @var string
     * @ORM\Column(name="staffPositionEn", type="text", nullable=true)
     */
    private $staffPositionEn;

    /**
     * @var string
     * @ORM\Column(name="staffPositionPl", type="text", nullable=true)
     */
    private $staffPositionPl;

    /**
     * @var string
     * @ORM\Column(name="staffPositionFr", type="text", nullable=true)
     */
    private $staffPositionFr;

    /**
     * @var string
     * @ORM\Column(name="staffEmail", type="text", nullable=true)
     */
    private $staffEmail;

    /**
     * @var string
     * @ORM\Column(name="staffPhone", type="text", nullable=true)
     */
    private $staffPhone;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getStaffAvatar()
    {
        return $this->staffAvatar;
    }

    /**
     * @param mixed $staffAvatar
     */
    public function setStaffAvatar($staffAvatar)
    {
        $this->staffAvatar = $staffAvatar;
        return $this;
    }

    public function getStaffNameRu(): ?string
    {
        return $this->staffNameRu;
    }

    public function setStaffNameRu(?string $staffNameRu): self
    {
        $this->staffNameRu = $staffNameRu;

        return $this;
    }

    public function getStaffNameEn(): ?string
    {
        return $this->staffNameEn;
    }

    public function setStaffNameEn(?string $staffNameEn): self
    {
        $this->staffNameEn = $staffNameEn;

        return $this;
    }

    public function getStaffNamePl(): ?string
    {
        return $this->staffNamePl;
    }

    public function setStaffNamePl(?string $staffNamePl): self
    {
        $this->staffNamePl = $staffNamePl;

        return $this;
    }

    public function getStaffNameFr(): ?string
    {
        return $this->staffNameFr;
    }

    public function setStaffNameFr(?string $staffNameFr): self
    {
        $this->staffNameFr = $staffNameFr;

        return $this;
    }

    public function getStaffPositionRu(): ?string
    {
        return $this->staffPositionRu;
    }

    public function setStaffPositionRu(?string $staffPositionRu): self
    {
        $this->staffPositionRu = $staffPositionRu;

        return $this;
    }

    public function getStaffPositionEn(): ?string
    {
        return $this->staffPositionEn;
    }

    public function setStaffPositionEn(?string $staffPositionEn): self
    {
        $this->staffPositionEn = $staffPositionEn;

        return $this;
    }

    public function getStaffPositionPl(): ?string
    {
        return $this->staffPositionPl;
    }

    public function setStaffPositionPl(?string $staffPositionPl): self
    {
        $this->staffPositionPl = $staffPositionPl;

        return $this;
    }

    public function getStaffPositionFr(): ?string
    {
        return $this->staffPositionFr;
    }

    public function setStaffPositionFr(?string $staffPositionFr): self
    {
        $this->staffPositionFr = $staffPositionFr;

        return $this;
    }

    public function getStaffEmail(): ?string
    {
        return $this->staffEmail;
    }

    public function setStaffEmail(?string $staffEmail): self
    {
        $this->staffEmail = $staffEmail;

        return $this;
    }

    public function getStaffPhone(): ?string
    {
        return $this->staffPhone;
    }

    public function setStaffPhone(?string $staffPhone): self
    {
        $this->staffPhone = $staffPhone;

        return $this;
    }
}
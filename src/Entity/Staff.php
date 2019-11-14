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
     * @ORM\Column(name="staffName", type="text", nullable=true)
     */
    private $staffName;

    /**
     * @var string
     * @ORM\Column(name="staffPosition", type="text", nullable=true)
     */
    private $staffPosition;

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

    public function getStaffName(): ?string
    {
        return $this->staffName;
    }

    public function setStaffName(?string $staffName): self
    {
        $this->staffName = $staffName;

        return $this;
    }

    public function getStaffPosition(): ?string
    {
        return $this->staffPosition;
    }

    public function setStaffPosition(?string $staffPosition): self
    {
        $this->staffPosition = $staffPosition;

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
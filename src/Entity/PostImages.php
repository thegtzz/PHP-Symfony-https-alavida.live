<?php


namespace App\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="e_post_images")
 * @ORM\Entity(repositoryClass="App\Repository\PostImagesRepository")
 * @ORM\HasLifecycleCallbacks
 *
 */
class PostImages
{
    const SERVER_PATH_TO_IMAGE_FOLDER = __DIR__.'/../../public/images';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Unmapped property to handle file uploads
     */
    private $file;

    /**
     * Unmapped property to handle file uploads
     * @ORM\Column(name="filename", nullable=false, type="string")
     */
    private $filename;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="postImages")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $post;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false, columnDefinition="TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP")
     */
    private $updated;




    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated(): \DateTime
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated(\DateTime $updated): void
    {
        $this->updated = $updated;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
        return $this;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and target filename as params
        $this->getFile()->move(
            self::SERVER_PATH_TO_IMAGE_FOLDER,
            $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->filename = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
    }

    public function refreshUpdated() {
        $this -> updated = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this -> upload();
    }

    public function __toString() {
        return $this->getFilename();
    }
}

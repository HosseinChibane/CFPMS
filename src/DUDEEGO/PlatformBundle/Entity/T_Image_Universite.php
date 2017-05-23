<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * T_Image_Universite
 * @ORM\Table(name="t__image__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Image_UniversiteRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class T_Image_Universite
{
     /**
     * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Universite", inversedBy="images")
     * @ORM\JoinColumn(name="universite_id", referencedColumnName="id")
     */
    private $universite;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="imageName", type="string", length=255)
     */
    private $imageName;

    /**
     * @Assert\File(
     *     maxSize="200k",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg"}
     * )
     * @Vich\UploadableField(mapping="universites_images", fileNameProperty="imageName", size="imageSize")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @var integer
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    public function __toString()
    {
        return $this->getImageName();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return EA_Image
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
        
        return $this;
    }

      /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return EA_Image
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    
    /**
     * @param integer $imageSize
     *
     * @return EA_Image
     */
    public function setImageSize($imageSize)
    {
        $this->imagesize = $imageSize;
        
        return $this;
    }

    /**
     * @return integer|null
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

      /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return EA_Image
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }


    /**
     * Set universite
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Universite $universite
     *
     * @return T_Image_Universite
     */
    public function setUniversite(\DUDEEGO\PlatformBundle\Entity\T_Universite $universite = null)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Universite
     */
    public function getUniversite()
    {
        return $this->universite;
    }
}

<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EA_Document
 *
 * @ORM\Table(name="e_a__document")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\EA_DocumentRepository")
 * @Vich\Uploadable
 */
class EA_Document
{
    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Physique")
   * @ORM\JoinColumn(nullable=false)
   */
    private $physique;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="pdfName")
     * 
     * @var File
     */
    private $pdfFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $pdfName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
    */
    private $updatedAt;

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
     * Set physique
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Physique $physique
     *
     * @return EA_Document
     */
    public function setPhysique(\DUDEEGO\PlatformBundle\Entity\EA_Physique $physique)
    {
        $this->physique = $physique;

        return $this;
    }

    /**
     * Get physique
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Physique
     */
    public function getPhysique()
    {
        return $this->physique;
    }

     /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setPdfFile(File $pdf = null)
    {
        $this->pdfFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getPdfFile()
    {
        return $this->pdfFile;
    }

    /**
     * @param string $pdfName
     *
     * @return EA_Document
     */
    public function setPdfName($pdfName)
    {
        $this->pdfName = $pdfName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPdfName()
    {
        return $this->pdfName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return EA_Document
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
}

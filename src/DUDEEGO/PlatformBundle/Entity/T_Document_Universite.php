<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * T_Document_Universite
 *
 * @ORM\Table(name="t__document__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Document_UniversiteRepository")
 * @Vich\Uploadable
 */
class T_Document_Universite
{
    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Universite", inversedBy="documents")
   * @ORM\JoinColumn(nullable=false)
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
     * @Vich\UploadableField(mapping="universites_pdf", fileNameProperty="pdfName")
     * 
     * @var File
     */
    private $pdfFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setpdfFile(File $pdf = null)
    {
        $this->pdfFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getpdfFile()
    {
        return $this->pdfFile;
    }

    /**
     * Set pdfName
     *
     * @param string $pdfName
     *
     * @return T_Document_Universite
     */
    public function setPdfName($pdfName)
    {
        $this->pdfName = $pdfName;

        return $this;
    }

    /**
     * Get pdfName
     *
     * @return string
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
     * @return T_Document_Universite
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
     * @return T_Document_Universite
     */
    public function setUniversite(\DUDEEGO\PlatformBundle\Entity\T_Universite $universite)
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

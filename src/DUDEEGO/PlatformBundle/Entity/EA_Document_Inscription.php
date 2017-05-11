<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EA_Document_Inscription
 *
 * @ORM\Table(name="e_a__document__inscription")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\EA_Document_InscriptionRepository")
 * @Vich\Uploadable
 */
class EA_Document_Inscription
{

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

     /**
     * @Vich\UploadableField(mapping="demandes_pdf", fileNameProperty="pdfName")
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
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
    */
    private $updatedAt;
    
    public function __toString()
    {
        return $this->getNom();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return EA_Document_Inscription
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return EA_Document_Inscription
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set physique
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Physique $physique
     *
     * @return EA_Document_Inscription
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
     * Set pdfName
     *
     * @param string $pdfName
     *
     * @return EA_Document_Inscription
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
     * @return EA_Document_Inscription
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
}

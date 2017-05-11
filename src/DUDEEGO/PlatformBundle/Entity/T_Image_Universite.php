<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Image_Universite
 *
 * @ORM\Table(name="t__image__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Image_UniversiteRepository")
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    public function __toString()
    {
        return $this->getLibelle();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return T_Image_Universite
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return T_Image_Universite
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return T_Image_Universite
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

<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Morale
 *
 * @ORM\Table(name="e_a__morale")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\EA_MoraleRepository")
 */
class EA_Morale
{
    /**
   * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Personne", cascade={"persist"}, cascade={"remove"})
   */
    private $personne;

     /**
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Langue", mappedBy="morale", cascade={"persist"}, cascade={"remove"})
     */
    private $langues;
    
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
     * @ORM\Column(name="raisonsocial", type="string", length=255)
     */
    private $raisonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255, nullable=true)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="naf", type="string", length=255, nullable=true)
     */
    private $naf;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;


    public function __toString()
    {
        return $this->getRaisonsocial();
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
     * Set raisonsocial
     *
     * @param string $raisonsocial
     *
     * @return EA_Morale
     */
    public function setRaisonsocial($raisonsocial)
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    /**
     * Get raisonsocial
     *
     * @return string
     */
    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return EA_Morale
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return EA_Morale
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set naf
     *
     * @param string $naf
     *
     * @return EA_Morale
     */
    public function setNaf($naf)
    {
        $this->naf = $naf;

        return $this;
    }

    /**
     * Get naf
     *
     * @return string
     */
    public function getNaf()
    {
        return $this->naf;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return EA_Morale
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
     * @return EA_Morale
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
     * Set personne
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Personne $personne
     *
     * @return EA_Morale
     */
    public function setPersonne(\DUDEEGO\PlatformBundle\Entity\EA_Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->langues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add langue
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Langue $langue
     *
     * @return EA_Morale
     */
    public function addLangue(\DUDEEGO\PlatformBundle\Entity\EA_Langue $langue)
    {
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove langue
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Langue $langue
     */
    public function removeLangue(\DUDEEGO\PlatformBundle\Entity\EA_Langue $langue)
    {
        $this->langues->removeElement($langue);
    }

    /**
     * Get langues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLangues()
    {
        return $this->langues;
    }
}

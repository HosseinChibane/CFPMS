<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Formation_Universite
 *
 * @ORM\Table(name="t__formation__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Formation_UniversiteRepository")
 */
class T_Formation_Universite
{
    /**
    * @ORM\ManyToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Langue_Universite", mappedBy="formation")
    */
    private $langues;

    /**
   * @ORM\ManyToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Universite", inversedBy="formations")
   * @ORM\JoinTable(name="t_formation_universite_t_universite")
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
     * @ORM\Column(name="formation", type="string", length=255)
     */
    private $formation;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=20)
     */
    private $niveau;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;
    
    /**
     * @var string
     *
     * @ORM\Column(name="requis", type="string")
     */
    private $requis;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float")
     */
    private $salaire;


    /**
     * @var float
     *
     * @ORM\Column(name="tauxembauche", type="float")
     */
    private $tauxembauche;


    /**
     * @var float
     *
     * @ORM\Column(name="tauxreussite", type="float")
     */
    private $tauxreussite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="concours", type="boolean")
     */
    private $concours;


    public function __toString()
    {
        return $this->getFormation();
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
     * Set formation
     *
     * @param string $formation
     *
     * @return T_Formation_Universite
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
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
     * @param \DUDEEGO\PlatformBundle\Entity\T_Langue_Universite $langue
     *
     * @return T_Formation_Universite
     */
    public function addLangue(\DUDEEGO\PlatformBundle\Entity\T_Langue_Universite $langue)
    {
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove langue
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Langue_Universite $langue
     */
    public function removeLangue(\DUDEEGO\PlatformBundle\Entity\T_Langue_Universite $langue)
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

    /**
     * Set universite
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Universite $universite
     *
     * @return T_Formation_Universite
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

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return T_Formation_Universite
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set requis
     *
     * @param string $requis
     *
     * @return T_Formation_Universite
     */
    public function setRequis($requis)
    {
        $this->requis = $requis;

        return $this;
    }

    /**
     * Get requis
     *
     * @return string
     */
    public function getRequis()
    {
        return $this->requis;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return T_Formation_Universite
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     *
     * @return T_Formation_Universite
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set tauxembauche
     *
     * @param float $tauxembauche
     *
     * @return T_Formation_Universite
     */
    public function setTauxembauche($tauxembauche)
    {
        $this->tauxembauche = $tauxembauche;

        return $this;
    }

    /**
     * Get tauxembauche
     *
     * @return float
     */
    public function getTauxembauche()
    {
        return $this->tauxembauche;
    }

    /**
     * Set tauxreussite
     *
     * @param float $tauxreussite
     *
     * @return T_Formation_Universite
     */
    public function setTauxreussite($tauxreussite)
    {
        $this->tauxreussite = $tauxreussite;

        return $this;
    }

    /**
     * Get tauxreussite
     *
     * @return float
     */
    public function getTauxreussite()
    {
        return $this->tauxreussite;
    }

    /**
     * Set concours
     *
     * @param boolean $concours
     *
     * @return T_Formation_Universite
     */
    public function setConcours($concours)
    {
        $this->concours = $concours;

        return $this;
    }

    /**
     * Get concours
     *
     * @return boolean
     */
    public function getConcours()
    {
        return $this->concours;
    }

    /**
     * Add universite
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Universite $universite
     *
     * @return T_Formation_Universite
     */
    public function addUniversite(\DUDEEGO\PlatformBundle\Entity\T_Universite $universite)
    {
        $this->universite[] = $universite;

        return $this;
    }

    /**
     * Remove universite
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Universite $universite
     */
    public function removeUniversite(\DUDEEGO\PlatformBundle\Entity\T_Universite $universite)
    {
        $this->universite->removeElement($universite);
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return T_Formation_Universite
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}

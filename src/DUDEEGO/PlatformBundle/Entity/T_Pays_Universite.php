<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Pays_Universite
 *
 * @ORM\Table(name="t__pays__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Pays_UniversiteRepository")
 */
class T_Pays_Universite
{

    /**
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Ville_Universite", mappedBy="pays")
     */
    private $villes;


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
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    public function __toString()
    {
        return $this->getPays();
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
     * Constructor
     */
    public function __construct()
    {
        $this->villes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ville
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Ville_Universite $ville
     *
     * @return T_Pays_Universite
     */
    public function addVille(\DUDEEGO\PlatformBundle\Entity\T_Ville_Universite $ville)
    {
        $this->villes[] = $ville;

        return $this;
    }

    /**
     * Remove ville
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Ville_Universite $ville
     */
    public function removeVille(\DUDEEGO\PlatformBundle\Entity\T_Ville_Universite $ville)
    {
        $this->villes->removeElement($ville);
    }

    /**
     * Get villes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return T_Pays_Universite
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
}

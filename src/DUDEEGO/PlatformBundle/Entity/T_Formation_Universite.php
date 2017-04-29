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
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Langue_Universite", mappedBy="formation")
     */
    private $langues;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Universite", inversedBy="formations")
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
     * @var string
     *
     * @ORM\Column(name="formation", type="string", length=255)
     */
    private $formation;


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
}

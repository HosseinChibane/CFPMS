<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Ville_Universite
 *
 * @ORM\Table(name="t__ville__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Ville_UniversiteRepository")
 */
class T_Ville_Universite
{

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Pays_Universite", inversedBy="villes", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $pays;

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
     * @ORM\Column(name="codepostal", type="string", length=255)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;
    
    public function __toString()
    {
        return $this->getCodepostal();
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
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return T_Ville_Universite
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return T_Ville_Universite
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return T_Ville_Universite
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set pays
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Pays_Universite $pays
     *
     * @return T_Ville_Universite
     */
    public function setPays(\DUDEEGO\PlatformBundle\Entity\T_Pays_Universite $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Pays_Universite
     */
    public function getPays()
    {
        return $this->pays;
    }
}

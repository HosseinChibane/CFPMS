<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Search_Universite
 *
 * @ORM\Table(name="t__search__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Search_UniversiteRepository")
 */
class T_Search_Universite
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
     * @ORM\Column(name="formations", type="string", length=255)
     */
    private $formations;

    /**
     * @var string
     *
     * @ORM\Column(name="langues", type="string", length=255)
     */
    private $langues;

    /**
     * @var string
     *
     * @ORM\Column(name="villes", type="string", length=255)
     */
    private $villes;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="nomuniversite", type="string", length=255)
     */
    private $nomuniversite;


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
     * Set formations
     *
     * @param string $formations
     *
     * @return T_Search_Universite
     */
    public function setFormations($formations)
    {
        $this->formations = $formations;

        return $this;
    }

    /**
     * Get formations
     *
     * @return string
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Set langues
     *
     * @param string $langues
     *
     * @return T_Search_Universite
     */
    public function setLangues($langues)
    {
        $this->langues = $langues;

        return $this;
    }

    /**
     * Get langues
     *
     * @return string
     */
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * Set villes
     *
     * @param string $villes
     *
     * @return T_Search_Universite
     */
    public function setVilles($villes)
    {
        $this->villes = $villes;

        return $this;
    }

    /**
     * Get villes
     *
     * @return string
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
     * @return T_Search_Universite
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

    /**
     * Set nomuniversite
     *
     * @param string $nomuniversite
     *
     * @return T_Search_Universite
     */
    public function setNomuniversite($nomuniversite)
    {
        $this->nomuniversite = $nomuniversite;

        return $this;
    }

    /**
     * Get nomuniversite
     *
     * @return string
     */
    public function getNomuniversite()
    {
        return $this->nomuniversite;
    }
}

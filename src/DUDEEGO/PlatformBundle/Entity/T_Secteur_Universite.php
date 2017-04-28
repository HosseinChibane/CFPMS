<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Secteur_Universite
 *
 * @ORM\Table(name="t__secteur__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Secteur_UniversiteRepository")
 */
class T_Secteur_Universite
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * @return T_Secteur_Universite
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
}


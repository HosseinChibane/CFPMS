<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Logement_Universite
 *
 * @ORM\Table(name="t__logement__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Logement_UniversiteRepository")
 */
class T_Logement_Universite
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
     * @var int
     *
     * @ORM\Column(name="capacitedortoir", type="integer")
     */
    private $capacitedortoir;


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
     * Set capacitedortoir
     *
     * @param integer $capacitedortoir
     *
     * @return T_Logement_Universite
     */
    public function setCapacitedortoir($capacitedortoir)
    {
        $this->capacitedortoir = $capacitedortoir;

        return $this;
    }

    /**
     * Get capacitedortoir
     *
     * @return int
     */
    public function getCapacitedortoir()
    {
        return $this->capacitedortoir;
    }
}


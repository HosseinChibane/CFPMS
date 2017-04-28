<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Frais_Insrcription_Universite
 *
 * @ORM\Table(name="t__frais__inscription__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Frais_Inscription_UniversiteRepository")
 */
class T_Frais_Inscription_Universite
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
     * @ORM\Column(name="coutscolariteinterne", type="decimal", precision=10, scale=2)
     */
    private $coutscolariteinterne;

    /**
     * @var string
     *
     * @ORM\Column(name="coutscolariteexterne", type="decimal", precision=10, scale=2)
     */
    private $coutscolariteexterne;


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
     * Set coutscolariteinterne
     *
     * @param string $coutscolariteinterne
     *
     * @return T_Frais_Insrcription_Universite
     */
    public function setCoutscolariteinterne($coutscolariteinterne)
    {
        $this->coutscolariteinterne = $coutscolariteinterne;

        return $this;
    }

    /**
     * Get coutscolariteinterne
     *
     * @return string
     */
    public function getCoutscolariteinterne()
    {
        return $this->coutscolariteinterne;
    }

    /**
     * Set coutscolariteexterne
     *
     * @param string $coutscolariteexterne
     *
     * @return T_Frais_Insrcription_Universite
     */
    public function setCoutscolariteexterne($coutscolariteexterne)
    {
        $this->coutscolariteexterne = $coutscolariteexterne;

        return $this;
    }

    /**
     * Get coutscolariteexterne
     *
     * @return string
     */
    public function getCoutscolariteexterne()
    {
        return $this->coutscolariteexterne;
    }
}
